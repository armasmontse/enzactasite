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
<title>Enzacta USA</title>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanUSA/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanUSA/css/styles.css?v=240228" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanUSA/css/dropmenus.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanUSA/scripts/dropmenu.js"></script>
<!-- jQuery Library -->
<?php include("/javascript_library.php"); ?>
<script src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanUSA/scripts/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//use.typekit.net/llw0duc.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
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
    "message": "<?php if(_LANGUAGE == '영어'){echo _COOCKIE_MESSAGE;} else {echo utf8_encode(_COOCKIE_MESSAGE);} ?>",
    "dismiss": "<?php echo _COOCKIE_CLOSE ?>",
    "link": "<?php if(_LANGUAGE == '영어'){echo _COOCKIE_INFO;} else {echo utf8_encode(_COOCKIE_INFO);} ?>",
    "href": "<?php echo $mosConfig_live_site;?>/templates/JavaBeanUSA/<?php if(_LANGUAGE == '영어'){echo 'kr';}else{echo _LANGUAGE;}?>-enzacta-cookies-use.php"
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
  
</style>
<!-- Analytics USA -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63114247-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-63114247-8');
</script>
<!-- Add lato google font ---- RRM ---- 240313 ---- START -->
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
<!-- Add lato google font ---- RRM ---- 240313 ---- END -->
</head>
<body>
<div id="ifg_window">
  <div class="img_ifg"> <img src="<?php echo $GLOBALS["mosConfig_image_site"]; ?>/templates/JavaBeanUSA/images/logo_i_feel_great.png" alt=""/></div>
  <div class="ifg_cont1">
    <?= _PUBLIC_IFGCONT1?>
  </div>
  <div class="ifg_cont2">
    <?= _PUBLIC_IFGCONT2?>
  </div>
  <div class="ifg_cont3">
    <?= _PUBLIC_IFGCONT3?>
  </div>
  <div class="clear"></div>
</div>
<!-------------------   Start Header   ------------------->
<div id="Header">
  <div class="Header_content">
    <div class="col_3 EnzactaLogo"> <a href="index.php"><img src="<?php echo $GLOBALS["mosConfig_image_site"]; ?>/templates/JavaBeanUSA/images/EnzactaLogo.gif" width="220" height="170" alt="Enzacta USA" /></a> </div>
    <div class="col_9 KeyButtons">
      <div style="float: right;" class="col_2 mright">
        <ul class="language" id="menu_language">
          <li><a href="#" class="languagelink">
            <?= _PUBLIC_LANG?>
            </a>
            <ul>
              <li><a href="#" onclick="changeLang('english')">
                <?= _PUBLIC_LANG_EN?>
                </a></li>
              <li><a href="#" onclick="changeLang('spanish')">
                <?= _PUBLIC_LANG_SP?>
                </a></li>
              <li><a href="#" onclick="changeLang('korean')">
                <?= _PUBLIC_LANG_KR?>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div style="float: right;" class="col_2"><a href="#" class="BLogin" onclick="ShowModal('#divLogin');" >
        <?= _PUBLIC_LOGIN?>
        </a></div>
      <div style="float: right;" class="col_3 mleft alright">
        <?= _PUBLIC_WELCOME_US?>
      </div>
      
      <?php /*  <div class="col_2 mright"><a href="https://www.enzacta.com/ifeelgreat/" target="_blank" class="ifg_Button" id="ifg_showW" onmouseover="document.getElementById('ifg_window').style.display='block';" onmouseout="document.getElementById('ifg_window').style.display='none';">&nbsp;</a> </div> */ ?>
      <!--<div class="col_2 mright">
<div class="KeyAccess">
            <form method="post" name="search_form">
                  <input name="loginIBO" type="text" class="input_KeyAccess" onfocus="clear_textbox();" value="Search" size="12">
              </form>
</div>
</div>--> 
    </div>
    <!-------   End KeyButtons   ------->
    
    <?php
	//this variable will be concatenated to the link path
	$sourceFolder = "EN";			//just a default value
	
	//change the source folder, depending on the selected language
	switch ($mosConfig_lang) 	
	{
		case "english":
			$sourceFolder = "EN";
      $img_path = "US";
			break;
		case "spanish":
			$sourceFolder = "SP";
      $img_path = "US";
			break;
		case "french":
			$sourceFolder = "FR";
			break;
		case "korean":
			$sourceFolder = "KR";
      $img_path = "KR";
			break;
		default:
			$sourceFolder = "EN";			
		}
?>
    <div class="col_9 ProductsBanner"> <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/EnzactaBannerTopProducts-201117.jpg" alt="Health Rebuilt USA" width="690" height="140" border="0" usemap="#Map" />
      <map name="Map" id="Map"><area shape="rect" coords="17,56,45,132" href="https://undew.com/cleanser-<?php echo strtolower($sourceFolder); ?>.html" target="_blank" />
        <area shape="rect" coords="410,75,474,131" href="EnzactaProducts/alfaB12/US/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="480,59,542,134" href="EnzactaProducts/alfaCAFENUTRA/US/<?php echo($sourceFolder); ?>/index.html" target="_blank" />	
        <area shape="rect" coords="546,59,608,134" href="EnzactaProducts/alfaCAFENUTRAlite/US/<?php echo($sourceFolder); ?>/index.html" target="_blank" />		  
        <area shape="rect" coords="86,60,108,130" href="https://undew.com/serum-<?php echo strtolower($sourceFolder); ?>.html" target="_blank" />
        <area shape="rect" coords="166,52,204,129" href="EnzactaProducts/alfaPXPFORTE/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="121,52,158,129" href="EnzactaProducts/alfaPXPROYALE/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="52,35,76,132" href="https://undew.com/tonic-<?php echo strtolower($sourceFolder); ?>.html" target="_blank" />
        <area shape="rect" coords="254,52,367,131" href="EnzactaProducts/alfaYAKUNAAH/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="374,55,403,130"href="EnzactaProducts/alfaENERGY/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="208,57,249,129" href="EnzactaProducts/alfaHFI/US/<?php echo($sourceFolder); ?>/index.html" target="_blank" />
        <area shape="rect" coords="614,50,685,128" href="https://<?php echo $mosConfig_domain.$mosConfig_domain_root_user;?>/products/alfa-pxp-pet-formula.php?ctry=US&langs=<?php echo strtolower($sourceFolder); ?>" target="_blank" />
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

<!--   Start Banner   -->
<div id="Banner">
  <div class="Banner_content">
    <div id="BannerGallery">
    <!--<img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Banner-CAFE-V2.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/alfaYAKUNAAH_banner-USEN-190208.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Enzacta_banner02.jpg' />
    <img href="http://www.enzacta.com/undew/tonic<?php if($sourceFolder=="KR"){echo "-". $sourceFolder;} elseif($sourceFolder=="EN"){echo "-". $sourceFolder;} elseif($sourceFolder=="SP"){echo "-". $sourceFolder;} ?>.html" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/Enzacta_banner12.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Enzacta_banner04.jpg' />
    <img href="http://www.enzacta.com/undew/serum<?php if($sourceFolder=="KR"){echo "-". $sourceFolder;} elseif($sourceFolder=="EN"){echo "-". $sourceFolder;} elseif($sourceFolder=="SP"){echo "-". $sourceFolder;} ?>.html" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/Enzacta_banner07.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Enzacta_banner06.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Enzacta_banner08.jpg' />
    <img href="#" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/Enzacta_banner09.jpg' />-->
    
    <img href="https://us.shopenzacta.com/products/alfa-cafe-nutra-signature-blend" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/2604_Banner_CL_Signature.jpg' target='_blank' />
    
    <img href="https://us.shopenzacta.com/products/alfa-pxp-pet-formula" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/2603_Banner_CL_PET.jpg' target='_blank' />

    <img href="https://us.shopenzacta.com/products/alfa-pxp-royale" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/US-ROYALE-banner-250828.jpg' target='_blank' />
        
    <img href="https://us.shopenzacta.com/products/alfa-energy" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/US-ENERGY-banner-250828.jpg' target='_blank'/>
    
    <img href="https://us.shopenzacta.com/products/alfa-b-12" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/US-B12-banner-250828.jpg' target='_blank'/> 
        
    <img href="https://us.shopenzacta.com/collections/undew-skin-care" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/<?php echo $img_path; ?>/Home/US-UNDEW-banner-250828.jpg' target='_blank'/>                  
        
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
	direction: 'random', // left, right, alternate, random, fountain, fountainAlternate
	navigation: true, // prev and next navigation buttons
	links: true
	});
</script>
    <div class="col_12 TopMenu">
      <ul class="Top" id="menu_Top">
        <li><a href="index.php?option=com_staticxt&Itemid=2292" class="Toplink">
          <?= _PUBLIC_TOPMENU_HOME?>
          </a>
          <ul>
            <li></li>
          </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=2296" class="Toplink">
          <?= _PUBLIC_TOPMENU_ABOUT?>
          </a>
          <ul>
            <li><a href="index.php?option=com_staticxt&Itemid=2346">
              <?= _PUBLIC_TOPMENU_HISTORY?>
              </a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2349">
              <?= _PUBLIC_TOPMENU_MEDIA?>
              </a></li>
            <li><a href=" http://www.<?=$mosConfig_domain.$mosConfig_domain_root_user ?>/index.php ">
              <?= _PUBLIC_TOPMENU_WORLD?>
              </a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="Toplink"> <?= _PUBLIC_TOPMENU_PRODU?> </a>
          <ul>
            <li>
              <a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_ALPHA?></a>
              <ul>
                <li><a href="index.php?option=com_staticxt&Itemid=2360"><?= _PUBLIC_TOPMENU_ROYALE?> </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2361"><?= _PUBLIC_TOPMENU_FORTE?> </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2365"><?= _PUBLIC_TOPMENU_HFI?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2354"><?= _PUBLIC_TOPMENU_YAKUNAAH?> </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2362"><?= _PUBLIC_TOPMENU_ENERGY?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2363"><?= _PUBLIC_TOPMENU_B12?></a>
				</li>
				<li><a href="index.php?option=com_staticxt&Itemid=1002424"><?= _PUBLIC_TOPMENU_CAFENUTRA?></a>
				</li>
				<li><a href="index.php?option=com_staticxt&Itemid=1002425"><?= _PUBLIC_TOPMENU_CAFENUTRALITE?></a>
				</li>   
              </ul> 
        		</li>
            <li>
              <a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_SKIN?></a>
              <ul>
                <li><a href="index.php?option=com_staticxt&Itemid=5060"><?= _PUBLIC_TOPMENU_UNDEW_CLEANSER?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=4986"><?= _PUBLIC_TOPMENU_UNDEW_TONIC?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=4409"><?= _PUBLIC_TOPMENU_UNDEW?> </a></li>
          		</ul>
            </li>
          </ul>
        </li>

        <li><a href="index.php?option=com_staticxt&Itemid=2299" class="Toplink">
          <?= _PUBLIC_TOPMENU_BUSINESS?>
          </a>
          <ul>
            <?
          
            $query1="select usertype from #__users where username=".$_SESSION["wwwuser"]->username;
    $database->setQuery($query1 );
  	$database->loadObject($qq);
  	
    if($qq->usertype!="Enzacta ABC Member")
      {
              ?>
            <li><a href="index.php?option=com_ibo&Itemid=2442&step_number=6001&action_number=0&pibo=Y">
              <?= _NEWREGISTRATION_MENU ?>
              </a> </li>
            <?
        }
        ?>
            <li><a href="index.php?option=com_staticxt&Itemid=2350">
              <?= _PUBLIC_TOPMENU_SUPPORT?>
              </a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2367" class="sub">
              <?= _PUBLIC_TOPMENU_COMPENSATION?>
              </a>
              <ul>
                <li class="topline"><a href="index.php?option=com_staticxt&Itemid=2367&plan=0">
                  <?= _PUBLIC_TOPMENU_MDM?>
                  </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2367&plan=1">
                  <?= _PUBLIC_TOPMENU_NETWORK?>
                  </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2367&plan=2">
                  <?= _PUBLIC_TOPMENU_BENEFITS?>
                  </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2367&plan=3">
                  <?= _PUBLIC_TOPMENU_REWARDS?>
                  </a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2367&plan=4">
                  <?= _PUBLIC_TOPMENU_ADDITIONALB?>
                  </a></li>
                <!--<li><a href="index.php?option=com_staticxt&Itemid=2367&plan=5">FAQs</a></li>-->
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=2301" class="Toplink">
          <?= _PUBLIC_TOPMENU_CONTACT?>
          </a>
          <ul>
            <li></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="col_12 BottomMenu">
      <div class="col_7 mleft">
        <?php mosCurrentPublicSitecontents(); ?>
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
<div id="Footer">
  <div class="Footer_content"> 
    <!-------------------   SOCIAL MEDIA   ------------------->
    <div class="col_3 mleft mright push_9 so_new_sm_style">
        <a style="margin-right: 5px;" href="https://www.facebook.com/EnzactaUSA/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/FB-ENZ-220427.svg" alt="ENZACTA Facebook" width="auto" height="28" border="0"/></a>
     
        <a style="margin-right: 5px;" href="https://www.instagram.com/enzactausa/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/Home/IG-ENZ-220427.svg" alt="ENZACTA Instagram" width="auto" height="28" border="0"/></a>       
      </div>
    <div class="clear"></div>
    <!-------------------   SOCIAL MEDIA   ------------------->  
    
    <div class="col_4 push_4 IBOLegal">
      <div class="col_2 mleft">
        <?php include_once( $GLOBALS['mosConfig_absolute_path'] .'/includes/USEN_footer.php' ); ?>
        </div>
      <div class="col_2 mright">
        <?php mosLoadModules ( 'USAdiscl' ); ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="col_8 push_2 IBOLegal">
      <?php mosLoadModules ( 'USAsearch' ); ?>
    </div>
    <div class="clear"></div>
     <div class="col_10 push_1 IBOLegal"><?php echo "Best Viewed in Mozilla Firefox"; ?></div>
    <div class="clear"></div>
  </div>
  <div id="Footerback2" style="background: #f3f3f3; padding-bottom: 20px;">
  <div class="Footer_content">
    <div class="col_10 push_1 IBOLegal" style="padding-bottom: 10px;"><?= _PUBLIC_Certified_Tittle?></div>
    <div class="clear"></div>
	
	<div class="col_3 alcenter mtop15 mbottom15; margin-left: 10px;">
      <script src="//cdn.ywxi.net/js/inline.js?w=120"></script>
    </div> 
	  
    <div class="col_4 alright mtop15 mbottom30; padding-top: 10px;" style="margin-top: 28px;">
        <span id="siteseal" class="mtop15" style= "padding-right: 209px;">
            <script async type="text/javascript" src="//seal.godaddy.com/getSeal?sealID=21302870220499fa81c1271165f16689a17e4d00547832559334422006"></script>
        </span>
    </div>

    <div class="col_4 alcenter mtop15 mbottom15;" style="margin-left: -34px;">
	  <a href="http://www.dsa.org/forms/CompanyFormPublicMembers/view?id=618DC00000035" target="_blank" style="padding-left: 30px;">
      	<img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/US/dsa.png" alt="" style="width: 72px" >
	  </a>
    </div>

    </div>
    <div class="clear"></div>
    </div>
</div>

<!-------   End Footer_content   ------->
</div>
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
  <?php mosLoadModules ( 'USibologin' ); ?>
</div>

<div id="divMdlLg" style="display:none;">
  <?php
    include($mosConfig_absolute_path."/templates/JavaBeanUSA/ModalRecoveryPass/modal-recovery-pass.php");
  ?>
</div>

<div style="display:none">
  <?php mosLoadModules ( 'USAtopmenu', -1 ); ?>
</div>
<!--<img src="<?php /*?><?php echo $mosConfig_live_site; ?><?php */?>/templates/JavaBeanUSA/images/POP_UP_EN.png" alt="broadcast live" width="460" height="250" border="0" usemap="#Map">
  <map name="Map">
    <area shape="rect" coords="161,200,296,237" href="http://www.enzactalive.com/" target="_blank">
  </map>-->
<?php 
		//TEMPLATE USA
		include( $mosConfig_absolute_path."/components/com_promotions/promo_public_site.php");
		if(isset($_SESSION["wwwuser"]->forceLang))		
			show_promo_public($_SESSION["ps_vendor_id"],$_SESSION["wwwuser"]->forceLang);
		else
			show_promo_public($_SESSION["ps_vendor_id"],$_SESSION["wwwuser"]->language_name);		
	?>
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
