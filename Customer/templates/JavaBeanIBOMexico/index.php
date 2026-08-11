<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/backoffice_manager.php' );
$backOfficeManager = BackOfficeManager::getInstance();
$backOfficeManager->setUserId($_SESSION['wwwuser']->id);
$secu=$backOfficeManager->getBackofficeIndex();
//error_reporting(E_ALL);
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
//echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/backoffice_manager.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE" />
<META HTTP-EQUIV="EXPIRES" CONTENT="-1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php echo $mosConfig_sitename; ?> Back OFFICE</title>
<!-- jQuery Library -->
<?php include("/javascript_library.php"); ?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/scripts/dropmenu.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/scripts/dropmenu2.js"></script>
<script src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/scripts/loopedslider.js" type="text/javascript" charset="utf-8"></script>
<script>
var currentSelectedDiv = new Array();
var defaultGroup = "default";





function AppendSelectedDiv(index)
{
	if(currentSelectedDiv[index] == undefined)
	{
		//alert("index: "+index+" not exist");
		currentSelectedDiv[index] = null;
	}
}
function ShowDivMenu(thisDiv,group)
{
	//alert(group);
	if(group == undefined)
	  group = defaultGroup;
	 
	 AppendSelectedDiv(group);
	//alert(thisDiv.id);
	if(thisDiv != currentSelectedDiv[group])
	{
		if(currentSelectedDiv[group]!=null)
			setDivDisplay(currentSelectedDiv[group],"none");

		setDivDisplay(thisDiv,"block");
		currentSelectedDiv[group] = thisDiv;
	}
	
	return false;
}
function setDivDisplay(div,dispValue)
{
	
		var childNodeArray = div.childNodes;
		for(i=0;i<childNodeArray.length;i++)
		{
			if(childNodeArray[i].nodeName=="DIV")
			{
				//alert(childNodeArray[i].id+" - "+dispValue);
				childNodeArray[i].style.display=dispValue;		
			}
		}
	
}

function getElementsByClassName(classname, node) 
{ 
	if(!node) 
	{ 
		node = document.getElementsByTagName('body')[0]; 
	} 
	var a = [], re = new RegExp('\\b' + classname + '\\b'); 
	els = node.getElementsByTagName('*'); 
	for (var i = 0, j = els.length; i < j; i++) 
	{ 
		if(re.test(els[i].className)) 
		{
			 a.push(els[i]); 
		}
	 } 
 return a; 
}

function InsertDivByClassName(source,targetClassName)
{
		var target = getElementsByClassName(targetClassName);
		alert(target);
		if(target)
		{
			alert(target[0].innerHTML);
			target[0].innerHTML = source.innerHTML;	
		}
}

function ActiveMenu()
{
	var activeMenu = document.getElementById('active_menu_phpshop');
	var isPShop = activeMenu;
	//alert(activeMenu);
	if(!isPShop)
	   activeMenu = document.getElementById('active_menu');
	   
	if(activeMenu)
	{
		if(activeMenu.parentNode)
		{
			if(activeMenu.parentNode.parentNode)
				{
					ShowDivMenu(activeMenu.parentNode.parentNode);
		/*			var group = isPShop?defaultGroup:"phpshop";
					if(isPShop)
						ShowDivMenu(activeMenu.parentNode.parentNode.parentNode,group);
					else
						ShowDivMenu(activeMenu.parentNode.parentNode,group);*/
				}	
		}
	}
}

var capas = ["capa1", "capa2", "capa3", "capa4", "capa5", "capa6", "capa7", "capa8", "capa9", "capa10"];
function mostrar(capa) {
for (i = 0, total = capas.length; i < total; i ++)
document.getElementById(capas[i]).style.display = (capas[i] == capa) ? "block":"none";
}
</script>



<?php if ($_REQUEST["option"] == "com_ibo" ) { ?>
   <script language="JavaScript1.2" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanAdmin/js/popup.js" type="text/javascript"></script>
	
<?php } ?>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<?php mosShowHead(); ?>
	
	
	
<!-- Estilos -->
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/css/5.1.3-bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/css/styles.css?v=240228" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/css/stylesPublic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanIBOMexico/css/dropmenus.css" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
	

</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false">
<?php mosLoadModules ( 'bofbanner', -1 ); $backOfficeManager = BackOfficeManager::getInstance();?>
<div id="Header" class="<?=@$backOfficeManager->getParameter("class") ?>">









	

	
	
	
	
<!-------   SMART OFFICE HEADER   ------->
<div>

<!-------   LOGO   ------->
<style>
    body
    {
        font-family: "Lato", sans-serif!important;
    }
    .container
    {
        width: 100%!important;
        max-width: 1320px!important;
        min-width: 0px!important;
    }
    td.po-expdate-sp
    {
        line-height: normal;
    }
     .BackOffice1
    {
        background-color: #362b20;
    }

    @media only screen and (min-width: 0px) 
    {
        .po-rep-index-ibo-logocontainer, .po-rep-index-ibo-bannercontainer{ display: block!important; width: 100%!important;}
        .po-rep-index-ibo-logoenz{display: block!important;margin: auto!important;}
    }

    @media only screen and (min-width: 860px) 
    {
       .po-rep-index-ibo-logocontainer, .po-rep-index-ibo-bannercontainer{ display: table-cell!important; }
       .po-rep-index-ibo-logoenz{ display: initial!important;margin: auto!important;}
       .po-rep-index-ibo-logocontainer{ width: 38%!important;}
       .po-rep-index-ibo-bannercontainer{ width: 62%!important;}
    }
</style>
<div style="background: #f3f3f3">

	<div class="container po-rep-index-ibo-maincontainer">
<table width="100%" cellspacing="10" >
      <tbody>
    <tr >
      <td class="po-rep-index-ibo-logocontainer" width="38%" ><img class="po-rep-index-ibo-logoenz" src="https://enzactamedia.enzacta.com/prod/images/ENZACTA-life-rebuilt-logo.svg" width="102" height="102"></td>                 
      <td class="po-rep-index-ibo-bannercontainer" width="62%" style="text-align:left">
     
      
<!-------   Banners  ------->

<div >
<?php mosLoadModules ( 'bofbanner', -1 ); $backOfficeManager = BackOfficeManager::getInstance();?>
  <div>
  <!-- :::::::::::::::-->
  <div id="loopedSlider">	
	<div class="slide-container">
		<?php
        	include_once('/iboblast/smartOFFICE/slides/MX/slideConf.php');
		?>
	</div>

</div>
<script type="text/javascript" charset="utf-8">
var $z = jQuery.noConflict();
	$z(function(){
		// Option set as a global variable
		$z.fn.loopedSlider.defaults.addPagination = true;
		
		$z('#loopedSlider').loopedSlider({
			autoStart: 7000,
			hoverPause: true,
		});
	});
</script>
   <!-- :::::::::::::::-->
    </div>
    

    <div class="clear"></div>
  <!--   Banners   -->



</td>
    </tr>
  </tbody>
</table>	
	</div>
</div>
<!-------   END LOGO   ------->

	
	<!-------   Color over menu   ------->
	<div class="<?=@$backOfficeManager->getParameter("class") ?>" style="min-height: 3px">
<div class="TopLine"></div></div>
	
	<!-------   END Color over menu  ------->

  <div class="<?=@$backOfficeManager->getParameter("class") ?>">
<div class="container">  
        <div class="EBOTopMenu"> 
          <!--Start TopMenu-->
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><?php mosLoadModules ( 'MXIBOTopm', -1 ); ?></td>
      <?php //block for showing premium subscription end date ?>
     <?php if( $secu >1) { 
       $premium_array = $backOfficeManager->getPremiumendDate($_SESSION['wwwuser']->id);
       
       ?>
      <td class="po-expdate-sp">
        <span>
        <?php echo _EXPIRATION_premium_OFFICE_legend?>&nbsp;
        <b class="po-expdate-sp-month"> <?php echo $premium_array["premium_end_month"];?>&nbsp;</b>
        <b class="po-expdate-sp-date"> <?php echo $premium_array["premium_end_day"]."".$premium_array["end_day_language_abbrivation"]?></b>,&nbsp;
        <b class="po-expdate-sp-year"><?php echo $premium_array["premium_end_year"];?></b>
      </span>
      </td>
    <?php  } ?>
    <?php // end block for showing premium subscription end date ?>
    </tr>
  </tbody>
</table>
   </div>
  </div>
</div>   
<div class="clear"></div>
<!--   end Menu abajo   -->



<!-------   Gray Menu   ------->

<div style="background: #f3f3f3">

<div class="container">
    
<table width="100%" border="0">
      <tbody>
        <tr>
        <td width="25%" style="min-width: 212px;"><div class="<?=@$backOfficeManager->getParameter("class")?>"><div class="EBOTopLine"></div>
        </div></td>


          <td style="text-align:right; padding-top: 14px" width="37%"><?php mosLoadModules ( 'MXIBOTopm2', -1 ); ?></td>
          <td width="4%"><?php mosCurrentIBOSiteCard();?></td>
          <td width="14%"></td>
			<td width="15%"></td>
          <td width="4%"><?php echo $mosConfig_sitename; ?></td>
          <td width="4%"><?php mosLoadModules ( 'MXIBOLog' ); ?></td>
        </tr>
      </tbody>
    </table>

</div>
<!-------   END Gray Menu   ------->
</div>
	</div>
<!-------   END SMART OFFICE HEADER   ------->


<style>
/* Added during QA review - Shopping Cart ***RRM*** - 2203 ----> ------ S T A R T ------ S T A R T ------ S T A R T */
    p {
    margin: 0!important;    
    }
    /* Favor de revisar si se aplica en el pa�s (se escondi� esa secci�n de GT) */
    /*td form.push_1 {
    display: none;
    }*/
    .col_9 table td form.push_1 {
    margin-left: 10px;
    }
    #selected-tab {
    background-color: #299973!important;
    font-family: 'Lato';
    }
    .tab-list-item {
    border-bottom: #299973 medium solid!important;
    font-family: 'Lato';    
    }
    input.btnStandard {
    white-space: break-spaces;
    line-height: normal!important;
    font-size: 12px!important;
    margin: 10px 0 10px 0;    
    }
    td.orange {
    color: #808080;
    font-family: lato;
    line-height: normal;
    letter-spacing: 0.2px;    
    }
    .TableShop .mtop20 td p {
    font-family: lato;
    color: #808080;
    font-size: 12px;
    line-height: normal;
    }
    span.TableShopPrice {
    font-family: lato;
    font-size: 12px;
    color: #299973;
    font-weight: 600;
    }
    .moduletable td {
    max-width: 145px;
    }
    a.BoxLeftMenu {
    color: #299973!important;
    }
    a.BoxLeftMenu {
    color: #299973!important;
    font-family: 'Lato';
    font-size: 12px!important;
    }
    a.subBoxLeftMenu {
    font-family: 'Lato';
    }
    span.ViewCart {
    color: #299973;
    }
    .col_3 {
    margin: 0;
    }
    body {
    background-color: #f3f3f3!important;
    }
    @media (min-width: 768px) {
    .container {
    }
    }
    @media (min-width:1200px) {
    .col_3 {
    min-width: 220px;        
    }
    }    
    @media (min-width:1400px) {    
    .col_9 {
    width: 860px;
    }    
    }
    @media screen and (min-width: 1200px) {
    .container {
    max-width: 1320px;
    }    
    }
    @media screen and (min-width: 0px) and (max-width: 1200px) {
    table.EBOLeftMenu {
    width: 145px;
    }
    .container {
    max-width: 970px;
    }
    }
    .justify-content-center {
    justify-content: center!important;
    text-align: center;
    }
    .container table.Table1 {
    font-family: 'Lato';
    font-size: 13px;
    margin: 40px auto 20px auto;
    }
    
    /* process-shopping ***RRM*** START */
    /*.container form table tbody tr td {
    text-align: left;
    }*/
    .container form table tbody tr td.alright {
    text-align: right;
    }
    .container table tbody tr td h1 {
    color: #299973!important;
    }
    form#confirmForm table tbody {
    font-size: 13px;
    }
    .TabletrTitle {
    background-color: #299973;
    color: #ffffff;
    font-weight: 700;
    }
    table.Table {
    font-family: 'Lato';
    }
    table tbody tr td a#url_query_next_page {
    background: #299973;
    padding: 8px 10px 8px 10px;
    border-radius: 8px;
    border: none;
    font-size: 13px;
    }
    table tbody tr td a#url_query_next_page:hover {
    background: #37d29d;
    color: #ffffff;    
    }    
    .DirContent {
    display: table-cell;
    }
    .ContentAddress .Address .Dir {
    width: 100%;
    min-height: 65px;        
    }
    .TabletrTitle td.grayDark.p12 {
    font-size: 13px;
    }
    table tbody .TabletrTitle td {
    font-size: 13px;
    }
    form table tbody .sectiontableheader td {
    font-size: 13px;
    }
    tbody tr.sectiontableheader {
    background-color: #299973;
    color: #ffffff;
    font-weight: 700;
    height: 30px;    
    }
    tbody .sectiontableheader td {
    padding-left: 10px;
    }
    tbody tr td a#shipAddressAddNew {
    display: block;
    width: 180px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 12px;        
    background: #299973;
    padding: 8px 10px 8px 10px;
    border-radius: 8px;
    border: none;
    font-size: 13px;
    }
    tbody tr td a#shipAddressAddNew:hover {        
    background: #37d29d;
    color: #ffffff;    
    }    
    table tbody tr td strong {
    font-size: 13px;
    margin-left: 5px;
    }
    .Address, .Address .business-address {
    min-height: 360px;
    }
    .Address .Dir a.btnStandard {
    background: #299973;
    border-radius: 8px;
    border: none;
    margin: 0 auto;
    display: block;
    width: 100px;
    text-align: center;
    }
    .Address .Dir a.btnStandard:hover {
    background: #37d29d;
    color: #ffffff;    
    }    
    #all_check a#all_shipping {
    background-color: #299973!important;
    color: #ffffff;
    width: 210px;
    margin: 0 auto;
    border-radius: 8px;
    margin-top: 30px;
    }
    #all_check a#all_shipping:hover {
    background-color: #37d29d!important;
    color: #ffffff;
    }    
    a#all_shipping_hide {
    background-color: #299973!important;
    color: #ffffff;
    width: 210px;
    margin: 0 auto;
    border-radius: 8px;
    margin-top: 30px;
    }
    a#all_shipping_hide:hover {
    background-color: #37d29d!important;
    color: #ffffff;
    }
    form#confirmForm h2 {
    background: #299973;
    padding: 7px;
    color: #ffffff;
    padding-left: 10px;
    font-weight: 700;
    text-align: center;
    }
    form#confirmForm font b {
    color: #299973;
    font-size: 13px;
    display: block;
    padding-top: 10px;
    }
    form#confirmForm table.Table1 {
    font-family: 'Lato';
    }
    table tbody .sectiontableheader td {
    text-align: center!important;
    }
    .container table tbody tr.Table1trTitle {
    color: white;
    background: #299973;
    }
    table.Table tbody tr {
    font-family: lato;
    font-size: 13px;
    }
    form#confirmForm p {
    font-family: lato;
    font-size: 13px;
    color: #299973;
    font-weight: 700;
    display: block;
    margin-bottom: 20px!important;
    margin-top: 15px!important;
    }
    .Table tbody tr.Table2trTitle {
    background: #299973;
    color: #ffffff;
    }
    .Table tbody .Table2trTitle th {
    padding-left: 10px;
    }
    .ng-scope table tbody tr th {
    width: 170px;
    }
    .onoffswitch-inner:before {
    background-color: #37d29d!important;
    }
    select.form-control.ng-pristine.ng-untouched.ng-valid {
    font-family: 'Lato';
    font-size: 13px;
    }
    input.btn.warning {
    background: #299973;
    font-family: 'Lato';
    font-size: 13px;
    margin: 10px;
    }
    input.btn.warning:hover {
    background: #37d29d;
    color: #ffffff;
    }
    .onoffcardhistory-inner:before {
    background-color: #37d29d!important;
    }
    table.cardhis tr td input.btn.success {
    margin-top: 10px;
    margin-bottom: 10px;    
    }
    input.btn.success {
    background: #299973;
    font-size: 12px;  
    font-weight: 300;
    font-family: 'Lato';        
    }
    input.btn.info {
    background: #808080;
    font-size: 12px;  
    font-weight: 300;
    font-family: 'Lato';        
    }
    input.btn.danger {
    background: #EC5659;
    font-size: 12px;  
    font-weight: 300;
    font-family: 'Lato';        
    }
    input.btn.success:hover { 
    font-weight: 700;
    color: #ffffff;        
    }
    input.btn.info:hover {
    font-weight: 700;
    color: #ffffff;         
    }
    input.btn.danger:hover {
    font-weight: 700;
    color: #ffffff;         
    }
    input.btn.warning {
    margin: 0 auto;
    display: block;
    }
    .cardhisdiv.ng-scope {
    min-height: 450px;
    }
    div#dialogAddress {
    font-family: 'Lato';
    font-size: 13px;
    }
    span#\31 80 label {
    font-family: 'Lato';
    font-size: 13px;
    color: #8D8D8D;
    margin-left: 5px;
    font-weight: 500;    
    }
    select.inputbox.form-control {
    font-family: 'Lato';
    font-size: 13px;
    color: #808080;
    }
    select.inputbox {
    font-family: 'Lato';
    font-size: 13px;
    color: #808080;
    padding: 5px;
    border: 1px solid #ced4da;
    border-radius: 6px;
    margin-right: 3px;
    margin-left: 3px;
    }
    td input.inputbox {
    font-family: 'Lato';
    font-size: 13px;
    color: #808080;
    }
    tr#Billaddress td label {
    font-family: 'Lato';
    font-size: 13px;
    font-weight: 500;
    color: #808080;
    }
    sapn#\37 2 label {
    font-family: 'Lato';
    font-size: 13px;
    font-weight: 500;
    color: #808080;
    margin-left: 3px;
    margin-bottom: 3px;
    margin-top: 3px;
    }
    sapn#\37 2 div input[type="text"] {
    margin-left: 82px;
    height: 34px;    
    }
    input#payment_chk_routing_number, #payment_chk_account_number, #payment_chk_account_name, input#name\=\"cantidad_186\" {
    border: 1px solid #ced4da;
    height: 34px;
    border-radius: 6px;
    }
    input.btnStandard {
    background: #299973;
    font-family: 'Lato';
    font-size: 13px!important;
    height: auto;
    border-radius: 8px;
    width: auto;
    margin: 5px 5px;
    }
    input.btnStandard:hover {
    background: #37d29d;
    color: #ffffff;   
    border: none;    
    }
    tr.sectiontableheader.Table2trTitle {
    font-family: lato;
    font-size: 13px;
    }
    tr.sectiontableheader.Table2trTitle th {
    font-variant: none!important;
    padding-left: 10px;
    }
    .container table tbody {
    font-size: 13px;
    }
    input#terms_conditions {
    margin-right: 5px;
    }
    .Table tbody tr td a font {
    color: #299973;
    font-weight: 700;
    }
    .orderMsgBox a {
    color: #299973!important;
    }
    .orderMsgBox a:hover {
    color: #37d29d!important;
    }
    .TabletrTitle td.grayDark.p12 {
    font-size: 13px;
    padding-left: 10px!important;
    }
    label {
    font-family: 'Lato';
    font-size: 13px;
    color: #8D8D8D;
    font-weight: 500;
    }
    .Table a {
    color: #299973;
    font-weight: 700;
    font-family: 'Lato';
    }
    .Table a:hover {
    color: #37d29d;
    }
    /* process-shopping ***RRM*** END */
    
    
    /* order history ***RRM*** START */
    /*.Table td {
    padding-left: unset!important;
    }*/
    .Table, table tbody .Table2trTitle td {
    padding-left: 10px!important;
    }
    /* order history ***RRM*** START */
    /* Special class to set font size for Glossary Word at footer - FDR */
    .po-rep-footer-gl-ft-sz {
    font-size: 13px;
    margin: 0 0 0 -5px;
    }    
    button.ui-button.ui-corner-all.ui-widget.ui-button-icon-only.ui-dialog-titlebar-close {
    background-color: unset!important;
    }
/* Added during QA review - Shopping Cart ***RRM*** - 2203 ----> ------ E N D ------ E N D ------ E N D */ 
ul#menu_ToolsTop2 {
    display: none;
}

/* ==================== +++ MAG +++ WENZ-1568 +++ 260730 +++ START +++ ==================== */

.footer__logos {
	align-items: center;
}

.moduletable tbody table tbody {
	display: flex !important;
	flex-direction: row !important;
	flex-wrap: nowrap !important;
	align-items: center !important;
	justify-content: center !important;
	gap: 25px;
	width: 100%;
}

.moduletable tbody table tbody tr[align="left"] td {
	white-space: nowrap !important;
}

.row.justify-content-center > .col-auto:has(table.moduletable) {
	width: 100% !important;
	display: flex !important;
	justify-content: center !important;
}

.footer__legal--row {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    justify-content: center !important;
}

#bajar table.moduletableLegals tbody {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 15px;
}

#bajar a {
    display: inline-block !important;
}

#bajar table.moduletableLegals td[nowrap] {
    display: flex !important;
    align-items: center !important;
    gap: 20px;
}
/* ==================== +++ MAG +++ WENZ-1568 +++ 260730 +++ END +++ ==================== */


</style>
	
	
	
  <!--   Content Begins -->


<div id="Container">

	<div class="container">
  <div class="container">
    <?
  if(($_REQUEST["nextpage"]=="shop")||(!empty($_REQUEST["category_id"]))||($_REQUEST["page"]=="shop.cart" && $_SESSION['cart']['idx'] == 0)){?>
    <div class="col_3">
      <?php mosLoadModules ( 'mxleft' ); ?>
      <?php mosLoadModules ( 'MXIBOleft' ); ?>
      <?php mosLoadModules ( 'MXIBOleft' ); ?>
    </div>
    <div class="col_9">
      <?} ?>
      <p>&nbsp;</p>
      <?php mosMainBody(); ?>
      <br />
      <?php if ( mosCountModules( 'MXright' ) ) { ?>
      <?php mosLoadModules ( 'MXIBOright' ); ?>
      <?php } ?>
      <?
  if(($_REQUEST["nextpage"]=="shop")||(!empty($_REQUEST["category_id"]))||($_REQUEST["page"]=="shop.cart" && $_SESSION['cart']['idx'] == 0)){?>
    </div>
    <?} ?>
    <div class="clear"></div>
  </div>
  <!--   end Container_content  -->
</div>
<!--   end Container_content  -->
</div>
<!--   end Container   -->


<style>
.col_5.mleft.mright.push_7 {
    left: 520px;
    padding-left: 0!important;
    width: auto;
    margin-bottom: 30px;
    }    
</style>
    
<!-------   Start Footer   ------->
<div class="container">
<div > 

<!-------   Start Footer   ------->
<div >
  
<div class="container">

    <!-------------------   SOCIAL MEDIA   ------------------->
    <style>
    .col_5.mleft.mright.push_7 {
        /* padding-top: 20px;
        margin-left: 213px; */

        margin: 0 auto !important;
        width: 100% !important;
        /* background: red; */
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 30px 0 30px 0;
    }
    



    </style>

    <div class="col_5 mleft mright push_7" style="padding-left: 0px; padding-right: 0; left: 0px;left: 0px;">
        <a style="margin-right: 5px;" href="https://www.facebook.com/enzactalatinoamericayespana/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Facebook.svg" alt="ENZACTA Facebook" width="auto" height="28" border="0"/></a>
<!-------------------   INSTAGRAM - START   ------------------->           
        <a style="margin-right: 5px;" href="https://www.instagram.com/enzactalasp/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Instagram3.svg" alt="ENZACTA Instagram" width="auto" height="28" border="0"/></a> 
<!-------------------   INSTAGRAM -END   ------------------->          
        <a href="https://wa.me/525523155770" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Whatsapp.svg" alt="ENZACTA Twitter" width="auto" height="28" border="0"/></a>          
      </div>
    <div class="clear"></div>
    <!-------------------   SOCIAL MEDIA   ------------------->

<div class="row justify-content-center" id="footer__menu--row" style="margin-top: 20px;">

<div class="col-auto"><?php mosLoadModules ( 'MXIBOfoot1' ); ?></div>
</div>

<div class="row justify-content-center" style="margin: 20px 0 10px 0 ">
<hr class="col-10" style="border: 1px solid lightgray; ">
</div>


<div class="col-auto "><?php mosLoadModules ( 'MXIBOfoot2' ); ?></div>
<div class="col-auto"><?php mosLoadModules ( 'MXIBOfoot3' ); ?></div>



<div class="row justify-content-center footer__legal--row">
<style>#bajar a{display: block;}</style>
<div id="bajar" class="col-auto"><?php mosLoadModules ( 'MXIBOLegal' ); ?></div>

<div class="col-auto po-rep-footer-gl-ft-sz"><?php require_once(CLASSPATH .'ps_html.php'); $ps_html = new ps_html;?>

<?$ps_html->show_legend(); ?></div></div>


<div class="row justify-content-center" style="margin: 20px 0 10px 0 ">
<div class="col-auto new-footer-width-mkt">
      <?php mosLoadModules ( 'USAsearch' ); ?>
    </div></div>

    

    
    <div class="row justify-content-center" style="margin: 20px 0 10px 0 ">
<hr class="col-10" style="border: 1px solid lightgray; ">
</div>





<div class="row justify-content-center" style="margin: 10px 0 40px 0 ">
    <div class="col-auto"><b><?= _PUBLIC_Certified_Tittle?></b></div>
    </div>
    
    <div class="row justify-content-center footer__logos" style="margin-top: 20px; padding-bottom: 30px">
		<div class="col-2">
			<span id="siteseal">
				<script async type="text/javascript" src="//seal.godaddy.com/getSeal?sealID=21302870220499fa81c1271165f16689a17e4d00547832559334422006"></script>
			</span>
		</div>
	
		<div class="col-2">
		<a href="index.php?option=com_staticxt&Itemid=1002552" target="_blank">
		<img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/LogoRecognition2026_ENZACTA.png" alt="" style="width: 110px;" >    
		</a>
		</div>

		<div class="col-2">
		<a href="http://www.amvd.org.mx/" target="_blank">
			<img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/New-AMVD-Vertical.png" alt="" style="width: 120px;">
		</a>
		</div>

		<div class="col-2">
		<a href="https://sellosdeconfianza.org.mx/MuestraCertificado.php?NUMERO_SERIE=MD_w200" target="_blank">
			<img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/new_amipci.jpg" alt="" style="width: 130px" >
		</a>   
		</div>



</div><!--   end EBOfooter1   --></div><!--   end Footer   -->
</div>
</div>





<?php mosLoadModules( 'debug', -1 );?>
<script type="text/javascript">
	var menu_ToolsTop=new menu_ToolsTop.dd("menu_ToolsTop");
	menu_ToolsTop.init("menu_ToolsTop","");
	ActiveMenu();
</script>
<script type="text/javascript">
	var menu_ToolsTop2=new menu_ToolsTop2.dd("menu_ToolsTop2");
	menu_ToolsTop2.init("menu_ToolsTop2","ToolsTop2hover");
	ActiveMenu();
</script>
<script type="text/javascript">
	var menu_LeftDrop=new menu_LeftDrop.dd("menu_LeftDrop");
	menu_LeftDrop.init("menu_LeftDrop","LeftDrophover");
</script>
<script src="https://wchat.freshchat.com/js/widget.js"></script>
<?php 
  $lang = 'en';
  $tag = 'english';
  switch($_SESSION['wwwuser']->language_name) {
    case 'english':
      $lang = 'en';
      break;
    case 'spanish':
      $lang = 'es';
      $tag = 'spanish';
      break;
    case 'chinese':
      $lang = 'zh-HANT';
      break;
    case 'korean':
      $lang = 'ko';
      break;
    case 'french':
      $lang = 'fr';
      break;
    default:
      $lang = 'en';
    
  }
?>
<script>
  window.fcWidget.init({
    token: "992a237e-1706-4bb7-814f-e1603c0d179e",
    host: "https://wchat.freshchat.com",
    tags: ["mxspanish"],
    externalId: "<?php echo $_SESSION['wwwuser']->username; ?>",
    locale: "<?php echo $lang; ?>",
    config: {
      content: {
        
        placeholders: {
          search_field: '<?php echo _placeholders_search_field; ?>',
          reply_field: '<?php echo _placeholders_reply_field; ?>',
          csat_reply: '<?php echo _placeholders_csat_reply; ?>'
        },
        actions: {
          csat_yes: '<?php echo _actions_csat_yes; ?>',
          csat_no: '<?php echo _actions_csat_no; ?>',
          push_notify_yes: '<?php echo _actions_push_notify_yes; ?>',
          push_notify_no: '<?php echo _actions_push_notify_no; ?>',
          tab_faq: '<?php echo _actions_tab_faq; ?>',
          tab_chat: '<?php echo _actions_tab_chat; ?>',
          csat_submit: '<?php echo _actions_csat_submit; ?>'
        },
        headers: {
          chat: '<?php echo _headers_chat; ?>',
          chat_help: '<?php echo _headers_chat_help; ?>',
          faq: '<?php echo _headers_faq; ?>',
          faq_help: '<?php echo _headers_faq_help; ?>',
          faq_not_available: '<?php echo _headers_faq_not_available; ?>',
          faq_search_not_available: '<?php echo _headers_faq_search_not_available; ?>',
          faq_useful: '<?php echo _headers_faq_useful; ?>',
          faq_thankyou: '<?php echo _headers_faq_thankyou; ?>',
          faq_message_us: '<?php echo _headers_faq_message_us; ?>',
          push_notification: "<?php echo _headers_push_notification; ?>",
          csat_question: '<?php echo _headers_csat_question; ?>',
          csat_yes_question: '<?php echo _headers_csat_yes_question; ?>',
          csat_no_question: '<?php echo _headers_csat_no_question; ?>',
          csat_thankyou: '<?php echo _headers_csat_thankyou; ?>',
          csat_rate_here: '<?php echo _headers_csat_rate_here; ?>',
          channel_response: {
            offline: '<?php echo _channel_response_offline; ?>',
            online: {
              minutes: {
                one: "<?php echo _channel_response_online_minutes_one; ?>",
                more: "<?php echo _channel_response_online_minutes_more; ?>"
              },
              hours: {
                one: "<?php echo _channel_response_online_hours_one; ?>",
                more: "<?php echo channel_response_online_hours_more; ?>",
              }
            }
          }
        }
      }
    }
  });
  
  window.fcWidget.user.setProperties({
    firstName: "<?php echo ($_SESSION["business_name"] == '') ? $_SESSION["wwwuser"]->first_name : $_SESSION["business_name"]; ?>",
    lastName: "<?php echo ($_SESSION["business_name"] == '') ? $_SESSION["wwwuser"]->last_name : ""; ?>",
    email: "<?php echo $_SESSION['wwwuser']->email; ?>",
    phone: "<?php echo $_SESSION['wwwuser']->phone_1; ?>"
  });
	



  ///////////////////////////// Header Change color /////////////////////////////


var color = "cafe";






///////////////////////////// Ends Header Change color /////////////////////////////



</script>
	

</body>
</html>