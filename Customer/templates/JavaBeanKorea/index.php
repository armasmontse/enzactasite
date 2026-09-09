<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
//echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>엔잭타</title>
<meta property="og:title" content="엔잭타" />

<meta property="og:description" content="엔잭타코리아 PXP"/>
<meta name="description" content="엔잭타코리아 PXP" />

<meta property="og:image" content="https://www.enzacta.com/Customer/templates/JavaBeanKorea/images/EnzactaLogo.gif" />
<link rel="image_src" href="https://www.enzacta.com/Customer/templates/JavaBeanKorea/images/EnzactaLogo.gif" />

<meta property="og:type" content="website" />
<meta name="keywords" content="엔잭타" />
<?php
if ( $my->id ) {
	initEditor();
}
?>
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanKorea/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanKorea/css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanKorea/css/dropmenus.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanKorea/scripts/dropmenu.js"></script>
<!-- jQuery Library -->
<?php include("/javascript_library.php"); ?>
<script src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanKorea/scripts/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
<script>
function changeLang(newLang)
{
	var forceLang = document.getElementById("forceLang");
	forceLang.value = 	newLang;
	forceLang.parentNode.submit();
}
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#EEEEEE"
    },
    "button": {
      "background": "#636363"
    }
  },
  "theme": "classic",
  "position": "top",
  "static": true,
  "content": {
    "message": "<?php echo _COOCKIE_MESSAGE  ?>",
    "dismiss": "<?php echo _COOCKIE_CLOSE ?>",
    "link": "<?php echo _COOCKIE_INFO ?>",
    "href": "<?php echo $mosConfig_live_site;?>/templates/JavaBeanKorea/<?php if (_LANGUAGE == '영어'){echo 'kr';} else {echo _LANGUAGE;}?>-enzacta-cookies-use.php"
  }
})});
</script>
<style>
  .cc-window.cc-banner {
    padding: 1em 7em;
    display: -webkit-flex;
    -webkit-flex-direction: row;
    -webkit-flex-wrap: nowrap;
    -webkit-align-items: center;
  }
  .cc-message{
    font-size: 14px;
    -webkit-flex:1 1 auto;
  }

  .cc-link{
    font-size: 14px !important;
  }

  .cc-btn {
    font-size: 14px !important;
    transition: all .20s ease;
  }

  .cc-btn:hover {
    font-size: 14px !important;
    box-shadow: 0 7px 4px -2px rgba(140,140,140,.5);
  }
  img[name="imagen1"] {
    width: 250px;
}
</style>
<!-- Analytics Korea -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63114247-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-63114247-13');
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false">
<!-------------------   Start Header   ------------------->
<div id="Header">
  <div class="Header_content">
    <div class="col_3 EnzactaLogo"> <a href="index.php"><img src="<?php echo $GLOBALS["mosConfig_image_site"] ;?>/templates/JavaBeanKorea/images/EnzactaLogo.gif" width="220" height="170" alt="Enzacta Korea" /></a> </div>
    <div class="col_9 KeyButtons">
       <div class="col_5 mleft alright"><?= _PUBLIC_WELCOME_KR?></div>
      <div class="col_2"><a href="#" class="BLogin" onclick="ShowModal('#divLogin');" ><?= _PUBLIC_LOGIN?></a></div>
      <div class="col_2 mleft alright">
        <ul class="language" id="menu_language">
          <li><a href="#" class="languagelink"><?= _PUBLIC_LANG?></a>
        <ul>
           <li><a href="#" onclick="changeLang('korean')"><?= _PUBLIC_LANG_KR?></a></li>
		 <li><a href="#" onclick="changeLang('english')"><?= _PUBLIC_LANG_EN?></a></li>            
		</ul>
          </li>
        </ul>
      </div>
      <!--<div class="col_2"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/member_search_new.jpg"></div>-->
    </div>
    <!-------   End KeyButtons   ------->
    

<?php
	//this variable will be concatenated to the link path
	$sourceFolder = "KR";			//just a default value
	
	//change the source folder, depending on the selected language
	switch ($mosConfig_lang) 	
	{
		case "korean":
			$sourceFolder = "KR";
			break;
		case "english":
			$sourceFolder = "EN";
			break;
		case "spanish":
			$sourceFolder = "SP";
			break;
		case "french":
			$sourceFolder = "FR";
			break;
		default:
			$sourceFolder = "KR";			
		}
?>
     <div class="col_2 message mleft mright mtop10" style="display: none;"><?= _PUBLIC_SITE_MESSAGE?> </div>
     <div class="col_5 ProductsBanner mright">	
		 
	 			<img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/EnzactaBannerTopProducts_260831.jpg" alt="Health Rebuilt KR" height="140" style="margin-left: 30px;" border="0" usemap="#Map" />
         <map name="Map" id="Map">
			<area shape="rect" coords="281,61,351,120" href="EnzactaProducts/alfaPXPPLUS/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
			<area shape="rect" coords="214,58,282,120" href="EnzactaProducts/alfaPXPFORTE/KO/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
			<area shape="rect" coords="352,66,406,115" href="EnzactaProducts/alfaB12/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
			<area shape="rect" coords="408,59,458,124" href="EnzactaProducts/alfaCAFENUTRA/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
	         	<area shape="rect" coords="461,59,511,125" href="EnzactaProducts/alfaCAFENUTRAlite/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
            <area shape="rect" coords="511,51,586,122" href="EnzactaProducts/alfaCAFELatte/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
	         	<area shape="rect" coords="586,46,624,118" href="EnzactaProducts/alfaRXP/KO/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
				 <area shape="rect" coords="631,49,683,121" href="EnzactaProducts/alfaAshwagandha/KO/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
			 <!-- <area shape="rect" coords="586,53,622,119" href="EnzactaProducts/CHEWABLE-alfaPXP4ME/KO/<?php echo($sourceFolder); ?>/index.html" target="_blank" /> -->
         </map>
         
    </div> 
    
    
  </div>
  <form method="post" name="ChangeLang">
  <input type="hidden" id="forceLang" name="forceLang" value="EN" />
   <!-- <select id="forceLang" name="forceLang">
    <option value="EN">English</option>
    <option value="SP">Spanish</option>
  </select> 
  <input type="submit" name="submitLang"> -->
  </form>
  <!-------   End Header_content   -------> 
</div>
<!-------   End Header   ------->
<div class="clear"></div>

<!-------------------   Start Banner   ------------------->
<div id="Banner">
  <div class="Banner_content">
    <?php 
             // dont' include td tags as the topimage comp always deos
              if ( mosCountModules( 'KRTopImg' ) ) { ?>
    <?php mosLoadModules ( 'KRTopImg',-1 ); ?>
    <?php 
           } else { ?>
    <?php /*?><?php echo ('aqui mostramos el relleno')?><?php */?>
    <div id="BannerGallery">
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/SlideCafeLatte-210726-v2.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/SlideCafe.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner03.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner04.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner05.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner06.jpg' />
      <!---<img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner07.jpg' />--->
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner08.jpg' />
      <img src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/Enzacta_banner09.jpg' />
    </div>
      <script>
	var $j = jQuery.noConflict();
	$j('#BannerGallery').jqFancyTransitions({ 
	width: 960, 
	height: 350 ,
	effect: 'zipper', // wave, zipper, curtain
	strips: 22, // number of strips
	delay: 8000, // delay between images in ms
	stripDelay: 25, // delay beetwen strips in ms
	titleOpacity: 0.7, // opacity of title
	titleSpeed: 1000, // speed of title appereance in ms
	position: 'alternate', // top, bottom, alternate, curtain
	direction: 'Alternate', // left, right, alternate, random, fountain, fountainAlternate
	navigation: true, // prev and next navigation buttons
	links: false
	});
</script>
    <?php
                    } ?>
    
    
    <div class="col_12 TopMenu">
      <ul class="Top" id="menu_Top">
        <li><a href="index.php?option=com_staticxt&Itemid=3753" class="Toplink"><?= _PUBLIC_TOPMENU_HOME?></a>
          <ul>
            <li></li>
          </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=3754" class="Toplink"><?= _PUBLIC_TOPMENU_ABOUT?></a>
          <ul>
            <li><a href="index.php?option=com_staticxt&Itemid=3755"><?= _PUBLIC_TOPMENU_HISTORY?></a></li>
            <li><a href=" http://www.<?=$mosConfig_domain.$mosConfig_domain_root_user ?>/index.php "><?= _PUBLIC_TOPMENU_WORLD?></a></li>
            <!--<li><a href="index.php?option=com_staticxt&Itemid=2348"><?= _PUBLIC_TOPMENU_TEAM?></a></li>-->
            <li><a href="index.php?option=com_staticxt&Itemid=3761"><?= _PUBLIC_TOPMENU_MEDIA?></a></li>
          </ul>
        </li>
        <li><a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_PRODU?></a>
          <ul>
          <li><a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_ALPHA?></a>
        	<ul>
        		<li><a href="index.php?option=com_staticxt&Itemid=1001438"><?= _PUBLIC_TOPMENU_CAFENUTRALITE?></a></li>
        		<li><a href="index.php?option=com_staticxt&Itemid=1001383"><?= _PUBLIC_TOPMENU_CAFENUTRA?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=1002504"><?= _PUBLIC_TOPMENU_CAFENUTRALATTE?></a></li>			
            <li><a href="index.php?option=com_staticxt&Itemid=3763"><?= _PUBLIC_TOPMENU_FORTE?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=3972"><?= _PUBLIC_TOPMENU_PLUS?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=3766"><?= _PUBLIC_TOPMENU_B12?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=1002415"><?= _PUBLIC_TOPMENU_RXP?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=1002802"><?= _PUBLIC_TOPMENU_ASHWAGANDHA?></a></li>
            <!-- <li><a href="index.php?option=com_staticxt&Itemid=1002558"><?= _PUBLIC_TOPMENU_GUMMIES_PXP4ME?></a></li> -->
            </ul>
            </li>
			  
		<li><a href="index.php?option=com_staticxt&Itemid=1002557" class="Toplink"><?= _PUBLIC_TOPMENU_PARTNER?></a>
        </li>
			  
        </ul>
        <li><a href="index.php?option=com_staticxt&Itemid=3770" class="Toplink"><?= _PUBLIC_TOPMENU_BUSINESS?></a>
          <ul>
          <?
          
            $query1="select usertype from #__users where username=".$_SESSION["wwwuser"]->username;
    $database->setQuery($query1 );
  	$database->loadObject($qq);
  	
    if($qq->usertype!="Enzacta ABC Member" && $woocommerce_banner_enable != true)
      {
        global $database, $mosConfig_absolute_path,$woocommerce_banner_enable_countries,$mosConfig_live_site;

          $sel_user ="SELECT u.id from mambophil_users u
                      INNER JOIN mambophil_adv_users au on au.id=u.id
                      where u.username ='".$_SESSION['wwwuser']->username ."' 
                        AND u.country IN($woocommerce_banner_enable_countries) and u.usertype = 'Enzacta IBO'";
              $database->setQuery($sel_user);
                  $database->loadObject($user_for_store);
                  //echo $sel_user;
            if(!empty($user_for_store->id)){
                    $cartQuery="SELECT id,auto_login_code, country FROM mambophil_enzacta_store_imported_users WHERE enzacta_username='".$_SESSION['wwwuser']->username ."' AND active_flag='Y'";
                    $database->setQuery($cartQuery);
                    $database->loadObject($storeUser);
                  if(!empty($storeUser->id)){
                          $landpage ="join-now";
                          $newstoreUrl = "https://".$_SESSION['wwwuser']->username.".".WOOCOMMERCE_SITE_PATH."/".strtolower($storeUser->country)."/".$landpage;
                  }else{
                      $newstoreUrl = "index.php?option=com_ibo&Itemid=2442&step_number=6001&pibo=Y";
                  }
              }else{
                   $newstoreUrl = "index.php?option=com_ibo&Itemid=2442&step_number=6001&pibo=Y";
                }

              ?>   
       <?php 
        // hide the public signup becuse of woocommerc site enabled
        if($woocommerce_banner_enable != true){
         ?>           
         <li><li><a href=<?php //echo $newstoreUrl; ?>><?php _NEWREGISTRATION_MENU ?></a></li>
         <!--<li><a href="index.php?option=com_ibo&Itemid=2442&step_number=5000&action_number=0"><?= _MAIN_MENU_NEW_WHOLESALE_BUYER ?></a>-->
         </li>
         <?
        }
       }
       ?>
            <li><a href="index.php?option=com_staticxt&Itemid=3772"><?= _PUBLIC_TOPMENU_SUPPORT?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=3773" class="sub"><?= _PUBLIC_TOPMENU_COMPENSATION?></a>
              <ul>
                <li class="topline"><a href="index.php?option=com_staticxt&Itemid=3773&plan=0"><?= _PUBLIC_TOPMENU_MDM?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=3773&plan=1"><?= _PUBLIC_TOPMENU_NETWORK?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=3773&plan=2"><?= _PUBLIC_TOPMENU_BENEFITS?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=3773&plan=3"><?= _PUBLIC_TOPMENU_REWARDS?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=3773&plan=4"><?= _PUBLIC_TOPMENU_ADDITIONALB?></a></li>
                <!-- <li><a href="index.php?option=com_staticxt&Itemid=3800"><?= _PUBLIC_LEGALS_POLICIES?></a></li> -->
				<li><a href="http://www.law.go.kr/lsInfoP.do?lsiSeq=140564&efYd=20130528#AJAX" target="_BLANK"><?= _PUBLIC_MLM_RULES ?></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=3795" class="Toplink"><?= _PUBLIC_TOPMENU_CONTACT?></a>
          <ul>
            <li></li>
          </ul>
        </li>
      </ul>
    </div>
    
    <div class="col_12 BottomMenu">
      <div class="col_7 mleft">
      <?php //mosCurrentPublicSitecontents(); ?> 
        <?php //mosLoadModules ( 'ibodetails' ); ?>
      </div>
      <div class="col_5 mright"> 
        <!--This is the DinamicMenu--></div>
    </div>
  </div>
  <!-------   End Banner_content   -------> 
</div>
<!-------   End Banner   ------->
<div class="clear"></div>

<!-------------------   Start Container   ------------------->
<div id="Container">
  <div class="Container_content">
    <?php mosMainBody(); ?>
    <div class="clear"></div>
  </div>
  <!-------   End Container_content   -------> 
</div>
<!-------   End Container   ------->
<div class="clear"></div>

<!-------------------   Start Footer   ------------------->
<style>
    .button-enz-hov:hover
    {
        filter: brightness(1.3);
    }
</style>
<div id="Footer">
  <div class="Footer_content">
    <!-------------------   SOCIAL MEDIA   ------------------->
    <table align="right" style="width: 445px;margin: 11px 0px 35px 0px;">
            <tr>
                <td style="width: 102px;">
                    <a href="https://blog.naver.com/enzacta_korea" target="_blank"><img class="button-enz-hov" src="https://enzactamedia.enzacta.com/prod/Customer/images/KR/Home/NB-ENZ-220711.svg" style="height: 30px;width: 102px;"></a>
                </td>
                <td style="width: 102px;">
                    <a href="https://pf.kakao.com/_yWAYxb" target="_blank"><img class="button-enz-hov" src="https://enzactamedia.enzacta.com/prod/Customer/images/KR/Home/KP-ENZ-220711.svg" style="height: 30px;width: 102px;"></a>
                </td>
                <td style="width: 102px;">
                    <a href="https://www.youtube.com/c/ENZACTAKorea" target="_blank"><img class="button-enz-hov" src="https://enzactamedia.enzacta.com/prod/Customer/images/US/Home/YT-ENZ-220427.svg" style="height: 30px;width: 102px;"></a>
                </td>
                <td style="width: 102px;">
                    <a href="https://www.instagram.com/enzactakorea/" target="_blank"><img class="button-enz-hov" src="https://enzactamedia.enzacta.com/prod/Customer/images/US/Home/IG-ENZ-220427.svg" style="height: 30px;width: 102px;"></a>
                </td>
            </tr>
        </table>
    <div class="clear"></div>
    <!-------------------   SOCIAL MEDIA   ------------------->
    <div class="col_6 push_4 IBOLegal">
      <div class="col_3 mleft">
        <?php include_once( $GLOBALS['mosConfig_absolute_path'] .'/includes/KREN_footer.php' ); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</div>
      <div class="col_2 mright">
        <?php 
        $policyLang="KR";
        if($mosConfig_lang=="english"){
          $policyLang="EN";
        } 
        mosLoadModules ( 'KR'.$policyLang.'IBODisclLgl' );
        //mosLoadModules ( 'KRdiscl' ); ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="col_6 push_4 IBOLegal mbottom20">
      <?php mosLoadModules ( 'KRsearch' ); ?>
    </div>
    <div class="clear"></div>
    <!--<div class="col_10 push_1 IBOLegal"><?= _PUBLIC_Certified1?></div>
    <div class="clear"></div>-->
    <!--<div class="col_10 push_1 IBOLegal"><?php echo "Best Viewed in Mozilla Firefox"; ?></div>-->
    </div>
      <!-------   End Footer_content   -------> 
</div>

<div id="Footerback2">
	<div class="Footer_content">
    <div class="col_2 alright mtop15 mbottom30"><a href="http://magazine.hankyung.com/" target="_blank"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/hankyung.jpg" /></a>
    </div>
    <div class="col_3 alcenter  mtop30 mbottom15" style="width:180px"><a href="http://www.mlmunion.or.kr/" target="_blank"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/mlm_union_website.jpg"/></a>
    </div>    
    <div class="col_3 alcenter mtop30 mbottom15" style="width:180px">
      <a href="http://www.ftc.go.kr/" target="_blank"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/fair_trade_commission.gif"/></a>
      <br /><br />
      
      <a class="LegalMenu" href="https://enzactamedia.enzacta.com/prod/Customer/KR/media/Average_Sponsorship_Commission_Disclosure-KR-20250828.pdf" target="_blank">후원수당내역공개</a>    
    </div>
    <div class="col_3 alcenter  mtop30 mbottom15" style="width:180px"><a href="http://www.seoul.go.kr/" target="_blank"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/HI_seoul.gif"/></a>
    </div>
    <div class="col_3 alcenter mright  mtop30 mbottom15" style="width:180px"><a onclick="javascript:window.open('http://www.mlmunion.co.kr/civil/popup_electron_search.jsp','','width=765, height=600,scrollbars=yes')" href="javascript:;">
        <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/KR/Home/mlmunion.gif"/></a>
    </div>
    </div>
    <div class="clear"></div>
    </div>
  <!-------   End Footer_content   -------> 
<!-------   End Footer   ------->
<div class="clear"></div>
<script type="text/javascript">
	var menu_language=new menu_language.dd("menu_language");
	menu_language.init("menu_language","languagehover");
</script> 
<script type="text/javascript">
//	var menu_CountryTop=new menu_CountryTop.dd("menu_CountryTop");
//	menu_CountryTop.init("menu_CountryTop","CountryTophover");
</script> 
<script type="text/javascript">
	var menu_Top=new menu_Top.dd("menu_Top");
	menu_Top.init("menu_Top","Tophover");
</script>
<?php mosLoadModules( 'debug', -1 );?>
<div id="divLogin" style="display:none">
  <?php mosLoadModules ( 'KRibologin' ); ?>
</div>

<div id="divMdlLg" style="display:none;">
  <?php
    include($mosConfig_absolute_path."/templates/JavaBeanKorea/ModalRecoveryPass/modal-recovery-pass.php");
  ?>
</div>

<div style="display:none">
  <?php mosLoadModules ( 'KRtopmenu', -1 ); ?>
</div>
<div id="divLuxuryCar" style="display:none">
<img src="<?php echo $GLOBALS["mosConfig_image_site"]; ?>/templates/JavaBeanUSA/images/POP_UP_EN.png" alt="broadcast live" width="460" height="250" border="0">
</div>
<?php /*?><?php
if (strcasecmp($mosConfig_dynamic_httphost[0],'wwwUS') == 0 ) { ?>
<?php echo ('estas entrando a Country Site USA')?>
<?php 
} else { ?>
<?php echo ('estas entrando a IBO Site USA')?>
<?php
} ?>
<?php */?>
</body>
</html>
<?php /*JCron Code*/ $from_template = 1;@include('components/com_jcron/jcron.php');/*DO NOT REMOVE ANYTHING*/ ?>
