<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
//echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
//echo;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<!--FOR CLEAR CACHE - START-->
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache, mustrevalidate">
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">   
    <!--FOR CLEAR CACHE - END-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta property="og:image" content="https://3000000.enzacta.com/Customer/images/E/Home/SP/Bimgs_08.jpg" />
<title>Enzacta M&eacute;xico</title>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<?php mosShowHead(); ?>
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanMexico/css/template.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanMexico/css/styles.css?20240101" rel="stylesheet" type="text/css" />
<link href="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanMexico/css/dropmenus.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanMexico/scripts/dropmenu.js"></script>
<!-- jQuery Library -->
<?php include("/javascript_library.php"); ?>
<script src="<?php echo $mosConfig_live_site; ?>/templates/JavaBeanMexico/scripts/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
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
    "message": "<?php echo utf8_encode(_COOCKIE_MESSAGE)  ?>",
    "dismiss": "<?php echo _COOCKIE_CLOSE ?>",
    "link": "<?php echo utf8_encode(_COOCKIE_INFO) ?>",
    "href": "<?php echo $mosConfig_live_site;?>/templates/JavaBeanMexico/<?php echo _LANGUAGE ?>-enzacta-cookies-use.php"
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
  .Foot-sp-hide {
    display: none;
  }
  .Foot-sp-left {
    padding-left: 70px;
  }
</style>
<!-- Google Analytics México -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-63114247-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-63114247-6');
</script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false" oncopy="return false">
<div id="ifg_window">
<div class="img_ifg">
<img src="<?php echo $GLOBALS["mosConfig_image_site"]; ?>/templates/JavaBeanUSA/images/logo_i_feel_great.png" alt=""/></div>
<div class="ifg_cont1"><?= _PUBLIC_IFGCONT1?></div>
<div class="ifg_cont2"><?= _PUBLIC_IFGCONT2?></div>
<div class="ifg_cont3"><?= _PUBLIC_IFGCONT3?></div>
<div class="clear"></div>
</div>
<!-------------------   Start Header   ------------------->
<div id="Header">
  <div class="Header_content">
    <div class="col_3 EnzactaLogo"> <a href="index.php"><img src="<?php echo $GLOBALS["mosConfig_image_site"] ;?>/templates/JavaBeanMexico/images/EnzactaLogo.gif" width="220" height="170" alt="Enzacta Mexico" /></a> </div>
    <div class="col_9 KeyButtons">
      <div class="col_2" style="float: right;"><a href="#" class="BLogin"  onclick="ShowModal('#divLogin');" ><?=_PUBLIC_LOGIN?></a></div>
      <div class="col_5 mleft alright" style="float: right;"><?= _PUBLIC_WELCOME_MX?></div>
      <?php /*  <div class="col_2 mright"><a href="https://www.enzacta.com/ifeelgreat/" target="_blank" class="ifg_Button" id="ifg_showW" onmouseover="document.getElementById('ifg_window').style.display='block';" onmouseout="document.getElementById('ifg_window').style.display='none';">&nbsp;</a> </div> */ ?>
      <!--<div class="col_2 mright">
        <ul class="language" id="menu_language">
          <li><a href="#" class="languagelink">Select your language</a>
           <ul>
			<li><a href="#" onclick="changeLang('english')">English</a></li>
			 <li><a href="#" onclick="changeLang('french')">Français</a></li> 
            <li><a href="#" onclick="changeLang('spanish')">Español</a></li>
		</ul>
          </li>
        </ul>
      </div>-->
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
	$sourceFolder = "SP";			//just a default value
	
	//change the source folder, depending on the selected language
	switch ($mosConfig_lang) 	
	{
		case "spanish":
			$sourceFolder = "SP";
			break;
		case "english":
			$sourceFolder = "EN";
			break;
		case "french":
			$sourceFolder = "FR";
			break;
		case "korean":
			$sourceFolder = "KR";
			break;
		default:
			$sourceFolder = "SP";			
		}
?>
    
    
    <div class="col_9 ProductsBanner"> <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/EnzactaBannerTopProducts-260603.jpg" alt="Health Rebuilt Mexico" width="650" height="140" border="0" usemap="#Map" />
<map name="Map" id="Map">

 <area shape="rect" coords="475,44,541,120" href="EnzactaProducts/alfaCAFEFUSION/MX/index.html" target="_blank" />

 <area shape="rect" coords="436,45,472,119" href="EnzactaProducts/alfaDHA/MX/index.html" target="_blank" />

  <area shape="rect" coords="359,53,431,121" href="EnzactaProducts/alfaB12/MX/index.html" target="_blank" />

  <area shape="rect" coords="326,31,357,120" href="EnzactaProducts/alfaENERGY/MX/index.html" target="_blank" />

  <area shape="rect" coords="281,33,322,119" href="EnzactaProducts/alfaYAKUNAAH/MX/index.html" target="_blank" />

  <area shape="rect" coords="230,37,273,117" href="EnzactaProducts/alfaHFI/MX/index.html" target="_blank" />
  
  <area shape="rect" coords="158,44,224,121" href="EnzactaProducts/alfaPXPEXTREME/MX/index.html" target="_blank" />
  
  <area shape="rect" coords="594,35,634,120" href="EnzactaProducts/alfaPXPFORTE/MX/index.html" target="_blank" />

  <area shape="rect" coords="113,33,151,120" href="EnzactaProducts/alfaPXPROYALE/MX/index.html" target="_blank" />

  <area shape="rect" coords="78,35,106,120" href="https://undew.com/serum-sp.html" target="_blank" />

  <area shape="rect" coords="24,41,67,120" href="https://undew.com/cleanser-sp.html" target="_blank" />
    
  <area shape="rect" coords="548,36,590,117" href="EnzactaProducts/alfaRXP/MX/index.html" target="_blank" />  
 

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
<style>
    a {
      cursor: pointer;
    }
    a[href="#"] {
      cursor: default;
    }
  </style>
<?php 
  ////Wellnesboutique promo Dynamic link        
  if(php_uname('n') == 'ENZAPP132' || php_uname('n') == 'ENZAPP133' || php_uname('n') == 'ENZAPP134') {
    //PROD
    $linkpage_wb = "https://enzactainfo.com/";
  } else {
    //DEV
    $linkpage_wb = "../../enzactainfo/wellnessboutique";
  }
?>
<div id="Banner">
  <div class="Banner_content">
    <?php 
             // dont' include td tags as the topimage comp always deos
              if ( mosCountModules( 'MEXTopImg' ) ) { ?>
    <?php mosLoadModules ( 'MEXTopImg',-1 ); ?>
    <?php 
           } else { ?>
    <?php /*?><?php echo ('aqui mostramos el relleno')?><?php */?>
    <div id="BannerGallery">
  <!--//1//-->
     <img href="https://mx.shopenzacta.com/productos/alfa-b12/" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/NewBanner-FinaL-classic-B-12.jpg' target="_blank"/>
    <!--//2//-->
     <img href="https://mx.shopenzacta.com/productos/alfa-pxp-royale1/" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Banner-ROYALE-20260529.jpg' target="_blank"/>
  <!--//3//-->
    <img href="https://mx.shopenzacta.com/productos/alfa-dha" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Banner-Classic-DHA-2026_05_04.jpg' target="_blank"/>
   <!--//4//-->
    <img href="https://mx.shopenzacta.com/productos/alfa-rxp-con-resveratrol" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/2603_Banner_CL_RXP.jpg' target="_blank"/>
     <!--//5//-->
    <img href="https://mx.shopenzacta.com/productos/alfa-pxp-forte2" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/NewBanner-FinaL-classic-FORTE_v2.jpg' target="_blank"/>
     <!--//6//-->
    <img href="https://mx.shopenzacta.com/productos/vitamina-d3-k2-78t2c/" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/NewBanner-FinaL-classic-vitaminaD3-K2.jpg' target="_blank"/>
       <!--//7//-->
    <img href="https://mx.shopenzacta.com/productos/magnesio/" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/2603_Banner_CL_magnesio.jpg' target="_blank"/>
    <!--//8//-->
    <img href="https://mx.shopenzacta.com/productos/paquete-balance-hormonal/" src='<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/s-paquete-hormonal-v1-classic.jpg' target="_blank"/>

   

  
    
       
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
  jQuery(document.links) .filter(function() { return this.hostname != window.location.hostname; }) .attr('target', '_blank');
  // prevent redirection on href with #
    var linkss = document.getElementsByClassName('ft-BannerGallery');
    for (var i = 0; i < linkss.length; i++) {
      linkss[i].addEventListener('click', function(event) {
        if (this.getAttribute('href') === '#') {
          event.preventDefault();

          console.log('Click on # link prevented');
        } 
        else
        {

        }
      });
    }
</script>
    <?php
                    } ?>
    <div class="col_12 TopMenu">
      <ul class="Top" id="menu_Top">
        <li><a href="index.php?option=com_staticxt&Itemid=2442" class="Toplink"><?= _PUBLIC_TOPMENU_HOME?></a>
        </li> 
        <li><a href="index.php?option=com_staticxt&Itemid=2458" class="Toplink"><?= _PUBLIC_TOPMENU_ABOUT?></a>
          <ul>
            <li><a href="index.php?option=com_staticxt&Itemid=2346"><?= _PUBLIC_TOPMENU_HISTORY?></a></li>
            <li><a href=" http://www.<?=$mosConfig_domain.$mosConfig_domain_root_user ?>/index.php "><?= _PUBLIC_TOPMENU_WORLD?></a></li>
            <!--<li><a href="index.php?option=com_staticxt&Itemid=2461"><?= _PUBLIC_TOPMENU_TEAM?></a></li>-->
            <li><a href="index.php?option=com_staticxt&Itemid=2463"><?= _PUBLIC_TOPMENU_MEDIA?></a></li>
          </ul>
        </li>
        <li><a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_PRODU?></a>
        <ul>
        <li><a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_ALPHA?></a>
        <ul>
        <li><a href="index.php?option=com_staticxt&Itemid=1001381"><?= _PUBLIC_TOPMENU_CAFEFUSION?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2466"><?= _PUBLIC_TOPMENU_ROYALE?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2465"><?= _PUBLIC_TOPMENU_FORTE?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=1001835"><?= _PUBLIC_TOPMENU_EXTREME?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2470"><?= _PUBLIC_TOPMENU_HFI?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2471"><?= _PUBLIC_TOPMENU_YAKUNAAH?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2467"><?= _PUBLIC_TOPMENU_ENERGY?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2468"><?= _PUBLIC_TOPMENU_B12?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2469"><?= _PUBLIC_TOPMENU_DHA?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=1002420"><?= _PUBLIC_TOPMENU_RXP?></a></li>
          </ul>
        </li>
        <li><a href="#" class="Toplink"><?= _PUBLIC_TOPMENU_SKIN?></a>
          <ul>
	    	<li><a href="index.php?option=com_staticxt&Itemid=5061"><?= _PUBLIC_TOPMENU_UNDEW_CLEANSER?></a></li>
            
            <li><a href="index.php?option=com_staticxt&Itemid=4408"><?= _PUBLIC_TOPMENU_UNDEW?></a></li>
          </ul>
        </li>
        </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=2472" class="Toplink"><?= _PUBLIC_TOPMENU_BUSINESS?></a>
          <ul>
            <?
            $query1="select usertype from #__users where username=".$_SESSION["wwwuser"]->username;
    $database->setQuery($query1 );
  	$database->loadObject($qq);
  	
    if($qq->usertype!="Enzacta ABC Member")
      {
              ?>
          <li><a href="index.php?option=com_ibo&Itemid=2442&step_number=6001&action_number=0&pibo=Y"><?= _NEWREGISTRATION_MENU ?></a>
        </li>
        <?
        }
        ?>
            <li><a href="index.php?option=com_staticxt&Itemid=2473"><?= _PUBLIC_TOPMENU_SUPPORT?></a></li>
            <li><a href="index.php?option=com_staticxt&Itemid=2474" class="sub"><?= _PUBLIC_TOPMENU_COMPENSATION?></a>
              <ul>
               
                <li><a href="index.php?option=com_staticxt&Itemid=2474&plan=1"><?= _PUBLIC_TOPMENU_NETWORK?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2474&plan=2"><?= _PUBLIC_TOPMENU_BENEFITS?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2474&plan=3"><?= _PUBLIC_TOPMENU_REWARDS?></a></li>
                <li><a href="index.php?option=com_staticxt&Itemid=2474&plan=4"><?= _PUBLIC_TOPMENU_ADDITIONALB?></a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="index.php?option=com_staticxt&Itemid=2498" class="Toplink"><?= _PUBLIC_TOPMENU_CONTACT?></a>
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
  <div class="Footer_content" style="padding-top: 10px;">
  <!-------------------   SOCIAL MEDIA   ------------------->    
      
      <style>
          .button-enz-hov {
              opacity: 1;
              filter: alpha(opacity=100);
              transition: all ease 0.5s;    
          }
          
          .button-enz-hov:hover {
              opacity: 0.5;
              filter: alpha(opacity=50);
              transition: all ease 0.5s;
          }
          .col_5.mleft.mright.push_7 {
              left: 520px;
              padding-left: 0!important;
              width: auto;
              }

          a#enlace1 img {
            width: 299px;
          }
      </style>
      
      <div class="col_5 mleft mright push_7" style="padding-left: 64px; padding-right: 0;">
        <a style="margin-right: 5px;" href="https://www.facebook.com/enzactalatinoamericayespana/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Facebook.svg" alt="ENZACTA Facebook" width="auto" height="28" border="0"/></a>
        <a style="margin-right: 5px;" href="https://twitter.com/ENZACTA" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Twitter.svg" alt="ENZACTA Twitter" width="auto" height="28" border="0"/></a>
<!-------------------   INSTAGRAM - START   ------------------->           
        <a style="margin-right: 5px;" href="https://www.instagram.com/enzactalasp/" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Instagram3.svg" alt="ENZACTA Instagram" width="auto" height="28" border="0"/></a> 
<!-------------------   INSTAGRAM -END   ------------------->          
        <a href="https://wa.me/525523155770" target="_new"><img class="button-enz-hov" src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/Home/Whatsapp.svg" alt="ENZACTA Twitter" width="auto" height="28" border="0"/></a>          
      </div>
      
        <div class="clear"></div>
<!-------------------   SOCIAL MEDIA   ------------------->    

    <div class="col_7 push_3 IBOLegal">
      <div class="col_3 mleft">
        <?php include_once( $GLOBALS['mosConfig_absolute_path'] .'/includes/MXEN_footer.php' ); ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; |</div>
      <div class="col_4 mright">
        <?php mosLoadModules ( 'MEXdiscl' ); ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="col_8 push_2 IBOLegal">
      <?php mosLoadModules ( 'USAsearch' ); ?>
    </div>
      <div class="col_10 push_1 IBOLegal"><font color="red"><?php echo "Best Viewed in Mozilla Firefox"; ?></font></div>
    <div class="clear"></div>
    <div class="clear"></div>
    <div class="col_10 push_1 IBOLegal"><!--Certificates--></div>
    <div class="clear"></div>
  </div>
  <div id="Footerback2" style="background: #f3f3f3; padding-bottom: 20px;">
  <div class="Footer_content" style="padding-bottom:10px;">
    <div class="col_10 push_1 IBOLegal"><?= _PUBLIC_Certified_Tittle?></div>
    <div class="clear"></div>
      
    <div class="col_2 alcenter mtop15 mbottom15 Foot-sp-hide">
      <script src="//cdn.ywxi.net/js/inline.js?w=120"></script>
    </div>  
      
    <div class="col_2 alright mtop15 mbottom30 Foot-sp-left" style="padding-top: 26px;">
        <span id="siteseal" class="mtop15">
            <script async type="text/javascript" src="//seal.godaddy.com/getSeal?sealID=21302870220499fa81c1271165f16689a17e4d00547832559334422006"></script>
        </span>
    </div>

    <div class="col_2 alcenter mtop15 mbottom15">
      <a href="http://www.dsa.org/forms/CompanyFormPublicMembers/view?id=618DC00000035" target="_blank">
      <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/dsa.png" alt="" style="width: 84px; padding-top: 12px;" >    
      </a>
    </div>

    <div class="col_2 alcenter mtop15 mbottom15">
      <a href="index.php?option=com_staticxt&Itemid=1002552" target="_blank">
      <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/LogoRecognition2026_ENZACTA.png" alt="" style="width: 94px;" >    
      </a>
    </div>

    <div class="col_3 alcenter mtop15 mbottom15">
      <a href="http://www.amvd.org.mx/" target="_blank">
        <img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/New-AMVD-Vertical.png" alt="" style="width: 100px;">
      </a>
    </div>
    <div class="col_2 alcenter mtop10 mbottom15">
      <a href="https://sellosdeconfianza.org.mx/MuestraCertificado.php?NUMERO_SERIE=MD_w200" target="_blank"><img src="<?php echo $GLOBALS['mosConfig_image_site']; ?>/images/MX/new_amipci.jpg" alt="" style="width: 100px; padding-top: 22px;" ></a>
    </div>

    </div>
    <div class="clear"></div>
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
	var menu_CountryTop=new menu_CountryTop.dd("menu_CountryTop");
	menu_CountryTop.init("menu_CountryTop","CountryTophover");
</script> 
<script type="text/javascript">
	var menu_Top=new menu_Top.dd("menu_Top");
	menu_Top.init("menu_Top","Tophover");
</script>
<?php mosLoadModules( 'debug', -1 );?>
<div id="divLogin" style="display:none">
  <?php mosLoadModules ( 'MXibologin' ); ?>
</div>

<div id="divMdlLg" style="display:none;">
  <?php
    include($mosConfig_absolute_path."/templates/JavaBeanMexico/ModalRecoveryPass/modal-recovery-pass.php");
  ?>
</div>

<div style="display:none">
  <?php mosLoadModules ( 'MEXtopmenu', -1 ); ?>
</div>
	<?php 
		//TEMPLATE MEXICO
		// to show popup in mexico public site
		include( $mosConfig_absolute_path."/components/com_promotions/promo_public_site.php");
		if(isset($_SESSION["wwwuser"]->forceLang))		
			show_promo_public($_SESSION["ps_vendor_id"],$_SESSION["wwwuser"]->forceLang);
		else
			show_promo_public($_SESSION["ps_vendor_id"],$_SESSION["wwwuser"]->language_name);		
	?> 
<?php /*?><?php
if (strcasecmp($mosConfig_dynamic_httphost[0],'wwwMX') == 0 ) { ?>
<?php echo ('estas entrando a Country Site Mexico')?>
<?php 
} else { ?>
<?php echo ('estas entrando a IBO Site Mexico')?>
<?php
} ?>
<?php */?>
</body>
</html>
<?php /*JCron Code*/ $from_template = 1;@include('components/com_jcron/jcron.php');/*DO NOT REMOVE ANYTHING*/ ?>