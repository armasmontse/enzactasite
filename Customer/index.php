<?php  
//print_r($_POST);
//error_reporting(E_ALL);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.

//identify server name and IP for debugging purposes
$hostname = gethostname();
$serverIp = gethostbyname($hostname);
header("X-Server-Host: " . $hostname);
header("X-Server-IP: " . $serverIp);

error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', '1');

/**
* @version $Id: index.php,v 1.9 2005/02/16 02:03:33 eddieajau Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/ 

/** Set flag that this is a parent file */
define( '_VALID_MOS', 1 );  

include_once( 'globals.php' );
require_once( 'configuration.php' );


// if ibo given pass it on, don't stop at this page.
$wwwpart = explode(".", $_SERVER["SERVER_NAME"]);
// if link does not contain a subdomain, then put on www. 
if (empty($wwwpart[2])) {
    header( "Location: ".$mosConfig_live_site_SSL."www.".$_SERVER["SERVER_NAME"] );
    exit();
}

require_once( $GLOBALS['mosConfig_absolute_path'] . '/components/com_log4php/api/LoggerManager.php' );
$_logger =& LoggerManager::getLogger('index.php');
if ($mosConfig_debug) {
  $_logger->debug('Begin of index.php');
}  

// displays offline page
if ( $mosConfig_offline == 1 ){
	include( 'offline.php' );
	exit();
}

require_once( 'includes/mambo.php' );
if (file_exists( 'components/com_sef/sef.php' )) {
	require_once( 'components/com_sef/sef.php' );
} else {
	require_once( 'includes/sef.php' );
}
require_once( 'includes/frontend.php' );

/*
Installation sub folder check, removed for work with CVS*/
if (file_exists( 'installation/index.php' )) {
	include ('offline.php');
	exit();
}
/**/
/** retrieve some expected url (or form) arguments */
$option = trim( strtolower( mosGetParam( $_REQUEST, 'option' ) ) );
$Itemid = intval( mosGetParam( $_REQUEST, 'Itemid', null ) );    
$database = new database( $mosConfig_host, $mosConfig_user, $mosConfig_password, $mosConfig_db, $mosConfig_dbprefix );
$database->debug( $mosConfig_debug );
$acl = new gacl_api();

/** patch to lessen the impact on templates */
if ($option == 'search') {
	$option = 'com_search';
}
/** mainframe is an API workhorse, lots of 'core' interaction routines */
$mainframe = new mosMainFrame( $database, $option, '.' );


review_ip_blacklist();
// check for enzacta redirects 
include ('configurationdynamic.php'); 
include ('indexredirect.php');

// if nothing recived from URL then get from dynamic link
//echo "checking for options";
if ($option == '') {
    $findQuery = explode("?", mosGetParam( $_REQUEST, 'firstlink', '' ));
    //echo "HIT".var_dump($findQuery);
    $findQueryArgs = array();
    if (isset($findQuery[1])) {
       $findQueryArgs = explode("&", $findQuery[1]);
    }
    foreach ($findQueryArgs as $key => $value) {
      $findsinglearg = explode("=", $value);
      $resolvename = "\$argname = \$findsinglearg[0];";
      eval($resolvename);
      if ($argname == "Itemid" || $argname == "id") {
         $resolvevalue = "\$".$argname." = \$findsinglearg[1];";
         //echo "<BR><BR>".$resolvevalue;
         eval($resolvevalue);
         //echo "<BR>".$Itemid;
      }
  	}
 }

if ($option == '') {   
	$sanit_mosConfig_dynamic_defaultMenu = mysql_real_escape_string($mosConfig_dynamic_defaultMenu);
	if ($Itemid) {
		$sanit_Itemid = mysql_real_escape_string($Itemid); 

		//echo "hit first";
		$query = "SELECT id, link"
		. "\n FROM #__menu"
		. "\n WHERE menutype='$sanit_mosConfig_dynamic_defaultMenu'"
		. "\n AND id = '$sanit_Itemid'"
		. "\n AND published = '1'"
		;
		//echo "<BR>1 = ".$query;
		$database->setQuery( $query );
	} else {
		//echo "hit Second";
		$query = "SELECT id, link"
		. "\n FROM #__menu"
		. "\n WHERE menutype='$sanit_mosConfig_dynamic_defaultMenu' AND published='1' and access='0'"
		. "\n ORDER BY parent, ordering LIMIT 1"
		;
		$database->setQuery( $query );
	//	echo "<BR>2 = ".$query;
	} 
	$menu = new mosMenu( $database );
	if ($database->loadObject( $menu )) {
		$Itemid = $menu->id;
	}
	$link = $menu->link;
	//echo "<BR> this is the link ".$link;
	if (($pos = strpos( $link, '?' )) !== false) {
		$link = substr( $link, $pos+1 ). '&Itemid='.$Itemid;
	}
	//echo "<BR> this is the link ".$link;
	parse_str( $link, $temp );
	/** this is a patch, need to rework when globals are handled better */
	foreach ($temp as $k=>$v) {
		$GLOBALS[$k] = $v;
		$_REQUEST[$k] = $v;
// 		echo "<BR> Loop $k and $v ";
// 		if ($k == 'option') {
// 			$option = $v;
// 		}
	}
//	die("<BR> this is the link ".$link);  
	mosRedirect( $mosConfig_domain_root."/index.php?".$link );
}

/** do we have a valid Itemid yet?? */
if ( $Itemid === null ) {
	/** Nope, just use the homepage then. */
	$sani_mosConfig_dynamic_defaultMenu = mysql_real_escape_string($mosConfig_dynamic_defaultMenu);
	$query = "SELECT id"
	. "\n FROM #__menu"
	. "\n WHERE menutype='$sani_mosConfig_dynamic_defaultMenu'"
	. "\n AND published='1'"
	. "\n ORDER BY parent, ordering"
	. "\n LIMIT 1"
	;
	$database->setQuery( $query );
	$Itemid = $database->loadResult();
}

$mainframe->initSession();
// loads english language file by default   
if ( $mosConfig_lang == '' ) {
	$mosConfig_lang = 'english';
}                             
include_once ( 'language/'.$mosConfig_lang.'.php' );

// frontend login & logout controls  
$return = mosGetParam( $_REQUEST, 'return', NULL );
$message = mosGetParam( $_POST, 'message', 0 );
$tandc_flag = mosGetParam( $_POST, 'tandc_flag', 0 ); 
if ($option == "login") {

  // displays offline page
	if ( $mosConfig_static_content_only == 1 ){
		$mosConfig_offline = 1;
		include( 'offline.php' );
		exit();
	}
	
	$mainframe->login();  
	// JS Popup message
	
	$currentUser = $mainframe->getUser();
	//print_r($currentUser);
	//echo "<br>".$currentUser->gid;
	//exit();

  if($currentUser->gid!=3)
  {
	$sanit_username = mysql_real_escape_string($currentUser->username); 
    //Retrive user accepted T&C version and country
  	$queryUsr = "SELECT usr.tandc_accpt_date,IFNULL(usr.tandc_version,0) AS tandc_version,country FROM mambophil_users AS usr WHERE usr.username='".$sanit_username."'";
  	$database->setQuery( $queryUsr );
  	$resUsr=$database->loadObjectList();
  	$usrTaC_Ver=$resUsr[0]->tandc_version;    
    $country=trim($resUsr[0]->country);

  	if(strlen($country)==3){
      	$q = "SELECT country_2_code FROM mambophil_pshop_country WHERE country_3_code='".$country."'";
      	$database->setQuery($q);
      	$ctry=$database->loadObjectList();
      	$country=trim($ctry[0]->country_2_code);
    }
    //Retrive T&C current version for the country
    $queryTaC = "SELECT tac.publish_sdate,tac.version FROM mambophil_t_and_c AS tac WHERE tac.type='IBO registration' AND tac.countrycode='".$country."'";
  	$database->setQuery( $queryTaC );
  	$resTaC=$database->loadObjectList();
  	$currTaC_Ver=$resTaC[0]->version;
  
    //echo $queryTaC."<b> CUR VER:".$currTaC_Ver."</b><br>";
  	//echo $queryUsr."<b> USR VER:".$usrTaC_Ver."</b><br>";
  	//echo $return."<b> Return :".$return."</b><br>";

    if($currTaC_Ver==$usrTaC_Ver)
    {
	     if ($return) {
		      mosRedirect( $mosConfig_domain_root."/".$return );
	     } 
       else {
		      mosRedirect( $mosConfig_domain_root."/.index.php" );
	     }
    }
    else
    {
       if ($return) {
	        mosRedirect( $mosConfig_domain_root."/login_tandc.php?username=".$currentUser->username."&return=".$return);
	     } 
       else {
	        mosRedirect( $mosConfig_domain_root."/login_tandc.php?username=".$currentUser->username);
	     }
    }
  }
  else
  {
     //echo "Hit the admin site";
     if ($return) {
		     mosRedirect( $mosConfig_domain_root."/".$return );
	   } 
     else {
		     mosRedirect( $mosConfig_domain_root."/.index.php" );
	   }
  }

} else if ($option == "logout") {   
	$mainframe->logout();

	// JS Popup message
	if ( $message ) {
		?>
		<script> 
		<!--//
		alert( "<?php echo _LOGOUT_SUCCESS; ?>" ); 
		//-->
		</script>
		<?php
	}

	if ($return) {
		mosRedirect( $return );
	} else {
		mosRedirect( 'index.php' );
	}
}

/** get the information about the current user from the sessions table */
$my = $mainframe->getUser();

/** detect first visit */
$mainframe->detect();

$gid = intval( $my->gid );

// check for customer restriction of admin menus starts(only works for customer site)
 $step_number = trim( strtolower( mosGetParam( $_REQUEST, 'step_number', 0 ) ) );
 $page = trim( strtolower( mosGetParam( $_REQUEST, 'page', 0 ) ) );  
 $option = trim( strtolower( mosGetParam( $_REQUEST, 'option' ) ) );
 $noAccess = mosAdminmenuCustomerCheck($step_number, $page, $option); 
  if ($noAccess == true) {
    mosRedirect( 'index.php' );
	}
//ends

// Hit counter
/*
if(!is_null($Itemid)){
  $query = "UPDATE #__menu SET hits = (hits + 1) WHERE id = " . $Itemid;
	
	$database->setQuery( $query );
	$result = $database->query();
  
  if($result === true){
      $step_number = trim( strtolower( mosGetParam( $_REQUEST, 'step_number', 0 ) ) );
      $nextpage = trim( strtolower( mosGetParam( $_REQUEST, 'nextpage', '' ) ) );
      $action_number = trim( strtolower( mosGetParam( $_REQUEST, 'action_number', 0 ) ) );
	  
	  $is_admin = 0;
	  if($gid == 3){
		$is_admin = 1;
	  }
      
      $query = 'SELECT id FROM #__menu_hits WHERE `option` = "' . $option . '" AND step_number = "' . $step_number 
        . '" AND nextpage = "' . $nextpage . '" AND action_number = "' . $action_number 
		. '" AND user_id = "' . $my->id . '" AND itemid = "' . $Itemid . '"';
      
      $database->setQuery( $query );
      $hits_id = $database->loadResult();
      
      if(!is_null($hits_id)){
        $query = "UPDATE #__menu_hits SET hits = (hits + 1), lastvisit_date = NOW() WHERE id = " . $hits_id;
      } else {
        $query = 'INSERT INTO #__menu_hits (`option`, `step_number`, `action_number`, `nextpage`, `hits`, `user_id`, `is_admin`, `lastvisit_date`, `itemid`) VALUES("' . $option . '", ' 
          . $step_number . ', ' . $action_number . ', "' . $nextpage . '", 1, ' . $my->id . ', ' . $is_admin . ', NOW(), ' . $Itemid . ')';
      }
	  
      $database->setQuery($query);
      $result = $database->query();
  }
}
*/
// gets the default template for site
$mosconfig_dynamic_current_template = $mainframe->getTemplate();
//template setting for advanced back office links.
if($_REQUEST["temp"]=="adv"){
 $mosconfig_dynamic_current_template = "JavaBeanIBOAdvance".$mosConfig_dynamic_template;
}
 
/** temp fix - this feature is currently disabled */
// Adjust template on desired site.

if ( $my->gid == 3 || (strcasecmp($mosConfig_dynamic_httphost[0],$mosConfig_dynamic_admin) == 0)) {   // Enzacta Admin
    if($mosConfig_dyanmic_vendor_id == 16){
      $mosconfig_dynamic_current_template = "JavaBeanAdminMitotrol";
    }elseif($mosConfig_dyanmic_vendor_id == 20 || $mosConfig_dyanmic_vendor_id == 21){
      $mosconfig_dynamic_current_template = "JavaBeanAdminMDM"; 
    }else{
      $mosconfig_dynamic_current_template = "JavaBeanAdmin";
    }    
} elseif ($my->gid == 4 || $my->gid>5) { // Enzacta IBO user and above
     // got to find better way .. Kind of hack but ok for demo.       
     if (!empty($mosConfig_dynamic_secured_template)) {
        $mosconfig_dynamic_current_template = "JavaBean".$mosConfig_dynamic_secured_template;
     } elseif (strpos($mosconfig_dynamic_current_template,"Advance")) {
        $mosconfig_dynamic_current_template = "JavaBeanIBOAdvance".$mosConfig_dynamic_template;
     } else {
        $mosconfig_dynamic_current_template = "JavaBeanIBO".$mosConfig_dynamic_template;
     }
} else {
    $mosconfig_dynamic_current_template = "JavaBean".$mosConfig_dynamic_template;
}  
//exit();

if ($mosConfig_debug) {
  $_logger->debug('The template is '.$mosconfig_dynamic_current_template.' AND Security GID = '.$my->gid);
}
 
/** @global A places to store information from processing of the component */
$_MOS_OPTION = array();


// this should not be done in the index page.. Determine reason and move out.. For now only commented.
//echo "Compare Value ".$_SESSION["auth"]["user_id"]." And ".$_SESSION["wwwuser"]->id." and ".$_REQUEST["option"];
// if (! empty($_SESSION["auth"]["user_id"]) && ! empty($_SESSION["wwwuser"]->id) && $_SESSION["auth"]["user_id"] <> $_SESSION["wwwuser"]->id && 1==3) {
//    echo "about to check page".mosGetParam( $_REQUEST, 'option', '' )."XXX".mosGetParam( $_REQUEST, 'page', '' )." YY ".mosGetParam( $_REQUEST, 'id', '' );
//    $direct_autoship = $_SESSION["direct_autoship"];
//    $unset_user=false;
//    if ((strcasecmp(trim(mosGetParam( $_REQUEST, 'option', '' )),'com_phpshop') == 0 && 
//       (strcasecmp(trim(mosGetParam( $_REQUEST, 'page', '' )),'account.billing') <> 0 && 
//        strcasecmp(trim(mosGetParam( $_REQUEST, 'page', '' )),'account.shipping') <> 0)) ||
//       (strcasecmp(trim(mosGetParam( $_REQUEST, 'option', '' )),'com_content') == 0 && 
//        strcasecmp(trim(mosGetParam( $_REQUEST, 'Itemid', '' )),'1047') == 0) ||
//       (!empty($direct_autoship) && (strcasecmp(trim(mosGetParam( $_REQUEST, 'option', '' )),'com_autoship') == 0)) ) {
//       
//         //unset if direct autoship
//          if ((strcasecmp(trim(mosGetParam( $_REQUEST, 'option', '' )),'com_phpshop') == 0 && !empty($direct_autoship) && 
//               (strcasecmp(trim(mosGetParam( $_REQUEST, 'page', '' )),'account.myorders') == 0 || 
//                 strcasecmp(trim(mosGetParam( $_REQUEST, 'page', '' )),'account.index') == 0)) ){
//                   $unset_user=true;
//                 }
//          //echo "do process";
//    } else {
//          $unset_user=true;
//    }
//    
//    //unset current working user
//    if($unset_user){
//          echo "going to unset the user account";
//          require_once $GLOBALS['mosConfig_absolute_path'] . '/components/com_ibo/ibosetter.php';
//          $setter = new ibosetter();
//          $setter->unsetWorkingAccount();
//          
//          $_SESSION["direct_autoship"] = 0;
//          unset($_SESSION["direct_autoship"]);
//          
//          mosRedirect( 'index.php?option='.$_REQUEST["option"].'&page='.$_REQUEST["page"].'&Itemid='.$_REQUEST["Itemid"].'&step_number='.$_REQUEST["step_number"] );
//          exit();
//    }
//    
// }
//storing the component values
include ('component_store.php');
$componentservice = new componentservice();
if((!empty($_SESSION["auth"]["user_id"]))&&($my->gid!=3)){
   $componentservice->storecomponent($_REQUEST); 
}
// precapture the output of the component
require_once( $mosConfig_absolute_path . '/editor/editor.php' );
ob_get_clean();
ini_set('default_charset','UTF-8');
$ary[] = "UTF-8";
$ary[] = "EUC-KR";
$ary[] = "ISO-2022-KR";
$ary[] = "JOHAB";
$ary[] = "ASCII";
mb_detect_order($ary);
header('Pragma: public');
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");                  // Date in the past   
header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0');    // HTTP/1.1
header ("Pragma: no-cache");
header("Expires: 0");
header('Content-Transfer-Encoding: UTF-8');
header('content-type: text/html; charset: UTF-8');
mb_http_output('UTF-8');
mb_internal_encoding("UTF-8");
mb_http_input('UTF-8');
ob_start();

//Checking that the step_number has the privilage for admin user

if($my->gid==3)
{
 if($componentservice->CheckComponentPrivilege($_REQUEST)){
    $priv_yes=true;
  }else{
    $priv_yes=true;
  }
}else{
    $priv_yes=true;
}

if ($path = $mainframe->getPath( 'front' )) {
	$task = mosGetParam( $_REQUEST, 'task', '' );
	$ret = mosMenuCheck( $Itemid, $option, $task, $gid ); 
	if (($ret)&&($priv_yes)) {
		require_once( $path );
	} else { 
		mosNotAuth();
	}
} else {
	echo _NOT_EXIST;
}

$_MOS_OPTION['buffer'] = ob_get_contents();
ob_end_clean();

initGzip();

$no_menu = mosGetParam( $_REQUEST, 'no_menu', '' );
if($no_menu==1){
 $mosconfig_dynamic_current_template = 'blankbody';
}

// loads template file
$mosconfig_dynamic_current_template = 'templates/'. $mosconfig_dynamic_current_template;


if ( !file_exists( $mosconfig_dynamic_current_template .'/index.php' ) ) {
	echo _TEMPLATE_WARN . $mosconfig_dynamic_current_template;
} else {
	require_once( $mosconfig_dynamic_current_template .'/index.php' );//exit;
	echo "<!-- ".time()." -->";
}

// displays queries performed for page
if ($mosConfig_debug) {
	echo $database->_ticker . ' queries executed';
	echo '<pre>';
 	foreach ($database->_log as $k=>$sql) {
 	    echo $k+1 . "\n" . $sql . '<hr />';
	}
}

print $return;

doGzip();
// Close up the logger
//Safely close all appenders with...
if ($mosConfig_debug) {
   $_logger->debug('END of index.php');
}
LoggerManager::shutdown();
date_default_timezone_set("US/Eastern");
/*$server_data = "<div style='width: 100%; height: 100px; border: solid 5px red'>";
$server_data .= $_SERVER['SCRIPT_FILENAME'].$mosconfig_dynamic_current_template;
$server_data .= "</div>";
echo $server_data;*/
?>