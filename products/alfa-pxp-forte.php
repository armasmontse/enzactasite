<?php
   define('_ENZACTA_MAILER', 1); 
   include('../phpmailer/config.php');
   $language = filter_var ( $_GET['langs'], FILTER_SANITIZE_STRING);
   if($language == ""){
    $language ="en";
   }
   require_once('../language/'.$language.'.php');
   $data_country = filter_var ( strtoupper($_GET['ctry']), FILTER_SANITIZE_STRING);
   include( '../indexpath.php' );

   //products json
   $products_json_file = '../products/products.json';
   $products = file_get_contents($products_json_file);
   $characters = json_decode($products);
   
   if ( count( $wwwpart ) == 2 ) {
    $path = $wwwpart[ 0 ] . "." . $wwwpart[ 1 ] . $all_dyanmic_nonsecure_site;
   } else {
    $path = $wwwpart[ 1 ] . "." . $wwwpart[ 2 ] . $all_dyanmic_nonsecure_site;
   }
   ?>
<!doctype html>
<!--[if IE 9]>
<html class="ie9" lang="en">
   <![endif]-->
   <!--[if (gt IE 9)|!(IE)]><!-->
   <html lang="en">
      <!--<![endif]-->
      <head>
         <title>alfa PXP FORTE</title>
         <!--meta info-->
         <meta charset="utf-8">
         <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
         <meta name="author" content="">
         <meta name="keywords" content="">
         <meta name="description" content="">
         <link rel="shortcut icon" type="../image/x-icon" href="https://enzactamedia.enzacta.com/prod/images/favicons/favicon.ico">
         <link rel="icon" type="image/png" href="https://enzactamedia.enzacta.com/prod/images/favicons/favicon-128x128.png">
         <link rel="apple-touch-icon" sizes="57x57" href="https://enzactamedia.enzacta.com/prod/images/favicons/favicon-48x48.png">
         <link rel="apple-touch-icon" sizes="57x57" href="https://enzactamedia.enzacta.com/prod/images/favicons/favicon-48x48.png">
         <link rel="apple-touch-icon" sizes="114x114" href="https://enzactamedia.enzacta.com/prod/images/favicons/favicon-128x128.png">
         <!--web fonts-->
         <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script" rel="stylesheet">

         <!-- NEW FONT 26 -->
         <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

         <!--lins css--> 
         <link rel="stylesheet" type="text/css" media="all" href="../plugins/owl-carousel/owl.carousel.css">
         <link rel="stylesheet" type="text/css" media="all" href="../plugins/owl-carousel/owl.transitions.css">
         <link rel="stylesheet" type="text/css" media="all" href="../plugins/jackbox/css/jackbox.min.css">
         <!--theme css-->
         <link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" media="all" href="../css/theme-animate.css">
         <link rel="stylesheet" type="text/css" media="all" href="../css/style.css">
         <link rel="stylesheet" type="text/css" media="all" href="../css/style-forte.css">
         <link rel="stylesheet" type="text/css" media="all" href="../css/enzacta-styles-<?php echo $language ?>.css">
         <link rel="canonical" href="http://enzacta.com/"/>
         <link rel="stylesheet" href="../Customer/css/jquery/jquery-ui.min.css">
         <!--head libs-->
         <script src="../Customer/js/jquery/jquery.min.js"></script>
         <script src="../Customer/js/jquery/jquery-ui.min.js" ></script>
         <script src="../plugins/jquery.queryloader2.min.js"></script>
         <script src="../plugins/modernizr.js"></script>
         <script src="../js/enz-lytics.js"></script>
         <!-- AJAX Form Submit -->
         <script type="text/javascript">
            "use strict";
            
            $(document).ready(function () {
                $('html').show();
                $("body").queryLoader2({
                    backgroundColor: '#fff',
                    barColor: '#27d87e',
                    barHeight: 4,
                    percentage: true,
                    deepSearch: true,
                    minimumTime: 2000
                });
            
                $("#loginIBO").val("");
            
                $("#loginIBO").focus(function () {
                    $("#loginIBO").val("");
                });
            
                $("#loginIBO").keydown(function (event) {
                    if (event.which == 13) {
                        event.preventDefault();
                        OnSubmitForm();
                    }
                });
            });
            
            $('html').addClass('d_none');

            $(".linkFix").on('touchstart', function() {
              window.location.href = $(this).attr('href');
            });
            
            function callback() {
                $('#bntsubmit').removeAttr('disabled');
            }
            
            function OnSubmitForm()
            {
                var dynamic_member_security = "<?php echo $protocal; ?>";
                var dyanmic_member_site = "<?php echo $path; ?>";
            
                var loginIBO = $('#loginIBO').val();
            
                if (loginIBO == "<?php echo $STR_TEXT_LOGIN_MESSAGE; ?>" || !loginIBO.match(/^[0-9a-zA-Z]{1,16}$/)) {
                    $('#loginIBO').val('<?php echo $STR_TEXT_LOGIN_ERROR; ?>');
                    return false;
                } else if (loginIBO.length == 0) {
                    $('#loginIBO').val("<?php echo $STR_TEXT_LOGIN_ERROR; ?>");
                    return false;
                } else {
                    var url = dynamic_member_security + loginIBO + "." + dyanmic_member_site;
                    $('#search_form').attr("action", url);
                    $('#search_form').submit();
                }
            
                return true;
            }
            
            function MM_preloadImages() { //v3.0
                var d = document;
                if (d.images) {
                    if (!d.MM_p)
                        d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                    for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) {
                            d.MM_p[j] = new Image;
                            d.MM_p[j++].src = a[i];
                        }
                }
            }
         </script>
      </head>
      <body class="sticky_menu">
         <!--layout-->
         <div class="wide_layout bg_light">
            <!--header markup-->
            <header role="banner" class="relative">
               <span class="gradient_line"></span>
               <!--top part-->
               <section class="header_top_part">
                  <div class="container">
                     <div class="row">
                        <!--access enzacta sites-->
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 t_xs_align_c">
                           <ul class="hr_list main_menu fw_light">
                              <li class="relative f_xs_none ">
                                 <a class="coun_fon color_dark fs_large relative r_xs_corners toplink b-Language" href="#"><?php echo $STR_TEXT_COUNTRY; ?><i class="icon-angle-down d_inline_m r_xs_corners"></i> </a>
                                 <!--sub menu-->
                                 <ul class="min_wid_130 sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none Country-b">
                                   <li class="relative">
                                    <li><a href="<?php echo $us_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_US; ?></a>
                                    </li>
                                    <li><a href="<?php echo $mx_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_MX; ?></a>
                                    </li>
                                    <li><a href="<?php echo $kr_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_KR; ?></a>
                                    </li>
<!--
                                    </li>
                                    <li><a href="<?php // echo $au_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php // echo $STR_TEXT_COUNTRY_AU; ?></a>
                                    </li>
-->
                                    <li><a href="<?php echo $ca_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_CA; ?></a>
                                    </li>
                                    <li><a href="<?php echo $co_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_CO; ?></a>
                                    </li>
                                    <li><a href="<?php echo $la_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_EC; ?></a>
                                    </li>
                                    <li><a href="<?php echo $sv_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_SV; ?></a>
                                    </li>
                                    <li><a href="<?php echo $gt_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_GT; ?></a>
                                    </li>
                                    <li><a href="<?php echo $hk_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_HK; ?></a>
                                    </li>
                                    <li><a href="<?php echo $nz_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_NZ; ?></a>
                                    </li>
                                   
                                    <li><a href="<?php echo $es_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_ES; ?></a>
                                    </li>
                                    <li><a href="<?php echo $tw_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_TW; ?></a>
                                    </li>
                                    <li><a href="<?php echo $gb_dyanmic_nonsecure_site; ?>" class="d_block color_dark"><?php echo $STR_TEXT_COUNTRY_GB; ?></a>
                                    </li>
                                    <!--sub menu (third level)-->
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 t_xs_align_c">
                           <ul class="hr_list main_menu fw_light">
                              <li class="relative f_xs_none ">
                                 <a class="coun_fon color_dark fs_large relative r_xs_corners toplink b-Language" href="#"><?php echo $STR_TEXT_LANG; ?> <i class="icon-angle-down d_inline_m r_xs_corners"></i> </a>
                                 <!--sub menu-->
                                 <ul class="min_wid_130 sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none Country-b">
                                    <li class="relative">
                                    <li><a href="?ctry=<?php echo $data_country ?>&langs=en" class="d_block color_dark"><?php echo $STR_TEXT_LANG_EN; ?></a>
                                    </li>
									<li><a href="?ctry=<?php echo $data_country ?>&langs=sp" class="d_block color_dark"><?php echo $STR_TEXT_LANG_SP; ?></a>
                                    </li>
                                    <li><a href="?ctry=<?php echo $data_country ?>&langs=kr" class="d_block color_dark"><?php echo $STR_TEXT_LANG_KR; ?></a>
                                    </li>
                                    <li><a href="?ctry=<?php echo $data_country ?>&langs=zh" class="d_block color_dark"><?php echo $STR_TEXT_LANG_ZH; ?></a>
                                    </li>
									<li><a href="?ctry=<?php echo $data_country ?>&langs=fr" class="d_block color_dark"><?php echo $STR_TEXT_LANG_FR; ?></a>
                                    </li>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-3 col-xs-7 t_xs_align_c pad_ibo_log">
                           <form method="post" id="search_form" name="search_form">
                              <input id="loginIBO" name="loginIBO" type="text" class="r_corners fw_light bg_light LoginIBO" placeholder="<?php echo $STR_TEXT_LOGIN_NUM; ?>" size="25">
                              <input id="loginSubmit" name="loginSubmit" type="button" class="color_green r_corners fs_medium color_button_hover tr_all b-ENZ01" onclick="OnSubmitForm()" value="<?php echo $STR_TEXT_LOGIN_GO; ?>">
                           </form>
                        </div>
                        <!--social icons-->
                        <div class="col-lg-3 col-md-3 col-sm-3  col-xs-5 t_align_r t_xs_align_c">
                           <ul class="hr_list d_inline_b social_icons ver_align_mid">
                              <li class="m_right_8"><a href="//www.facebook.com/ENZACTA" target="_blank" class="color_grey facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a>
                              </li>
                              <li class="m_right_8"><a href="//twitter.com/ENZACTA" target="_blank" class="color_grey twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a>
                              </li>
                              <li class="m_right_8"><a href="//www.youtube.com/user/CorporativoEnzacta" target="_blank" class="color_grey youtube circle icon_wrap_size_1 d_block"><i class="icon-youtube-play"></i></a>
                              </li>
                              <li class="m_right_8"><a href="//www.instagram.com/enzacta/" target="_blank" class="color_grey instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <hr>
               <!--header bottom part-->
               <section id="ENZ-header" class="header_bottom_part bg_light">
                  <div class="container">
                     <div class="d_table w_full d_xs_block">
                        <!--logo-->
                        <div class="col-lg-1 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c"> <a href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>" class="d_inline_m m_xs_top_20 m_xs_bottom_20 ENZACTA-logo"><img class="wid_80_noft" src="https://enzactamedia.enzacta.com/prod/images/ENZACTA-life-rebuilt-logo.svg" alt="ENZACTA-life-rebuilt-logo"/> </a> </div>
                        <div class="col-lg-11 col-md-10 col-sm-10 d_table_cell d_xs_block f_none">
                           <div class="relative clearfix">
                              <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block"> <i class="icon-menu"></i> </button>
                              <!--main navigation-->
                              <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
                                 <ul class="hr_list main_menu fw_light">
                                    <li class="relative f_xs_none m_xs_bottom_5"> <a class="color_dark fs_large relative r_xs_corners" href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>"><?php echo $STR_TEXT_MENU_HOME; ?></a> </li>
                                    <li class="relative f_xs_none m_xs_bottom_5">
                                       <a class="color_dark fs_large relative r_xs_corners toplink" href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>#products"><?php echo $STR_TEXT_MENU_PRODUCTS; ?><i class="icon-angle-down d_inline_m r_xs_corners"></i> </a>
                                       <?php if ($data_country =="US"||$data_country =="MX"||$data_country =="KR"||$data_country =="CA"||$data_country ==""||$data_country =="EC"||$data_country =="SV"||$data_country =="GT"||$data_country =="ES"||$data_country =="HK"||$data_country =="GB"||$data_country ==""){ ?>
                                       <!--sub menu-->
                                       <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none lin_hei_24">
                                          <li class="relative">
                                             <a href="#" class="d_block color_dark relative"><?php echo $STR_TEXT_MENU_ALFA_LINE; ?><i class="icon-angle-right"></i> </a>
                                             <!--sub menu (third level)-->
                                             <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                <?php
                                                   foreach ($characters as $character) {
                                                     if (preg_match('/'.$data_country.'/',$character->count)&&$character->category=="alfa_nutritional" ) {
                                                     echo '<li><a href="../'.$character->link.'?ctry='.$data_country.'&langs='.$language.'" class="d_block color_dark">';
                                                     echo $character->name.'</a></li>'; 
                                                     }
                                                   }
                                                   ?>
                                             </ul>
                                          </li>
                                          <?php 
                                             if ($data_country =="US"||$data_country =="MX"||$data_country =="KR"||$data_country ==""||$data_country =="EC"||$data_country =="SV"||$data_country =="GT"||$data_country =="GB"||$data_country =="") { ?>
                                          <li class="relative">
                                             <a href="#" class="d_block color_dark relative"><?php echo $STR_TEXT_MENU_UNDEW_LINE; ?><i class="icon-angle-right"></i> </a>
                                             <!--sub menu (third level)-->
                                             <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                <?php
                                                   foreach ($characters as $character) {
                                                     if (preg_match('/'.$data_country.'/',$character->count)&&$character->category=="undew" ) {
                                                     if ($language == "zh") {
                                                        echo '<li><a href="'.$character->link.'-en.html" target="_blank" class="d_block color_dark">';
                                                     }else{
                                                        echo '<li><a href="'.$character->link."-".$language.'.html" target="_blank" class="d_block color_dark">';
                                                     }
                                                     echo $character->name.'</a></li>'; 
                                                     }
                                                   }
                                                   ?>
                                             </ul>
                                          </li>
                                          <?php } ?>
                                       </ul>
                                    <?php } ?>
                                    </li>
                                    <li class="relative f_xs_none m_xs_bottom_5 "> <a class="color_dark fs_large relative r_xs_corners toplink" href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>#whoweare"><?php echo $STR_TEXT_MENU_ABOUT_US; ?></a> </li>
                                    <li class="relative f_xs_none m_xs_bottom_5"> <a class="color_dark fs_large relative r_xs_corners" href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>#contact"><?php echo $STR_TEXT_MENU_TESTIMONS; ?></a> </li>
                                    <li class="relative f_xs_none m_xs_bottom_5"> <a class="color_dark fs_large relative r_xs_corners" href="../home.php?ctry=<?php echo $data_country ?>&langs=<?php echo $language ?>#contact"><?php echo $STR_TEXT_MENU_CONTACT; ?></a> </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </header>
            <div class="in-mbanner-back">
               <div class="in-mbanner">
                  <div class="">
                     <h1 class="in-mtitle"><?php echo $PXP_FORTE_TITTLE_WORD; ?></h1>
                  </div>
               </div>
            </div>
            <!--content-->
            <div class="in-mcontainer">
               <div class="in-mcontainer-izq">
                  <div class="in-mcontainer-izq-text">
                     <h3><?php echo $PXP_FORTE_SUBTITTLE_WORD; ?></h3>
                     <!--<h4>alfa PXP FORTE</h4>-->
                     <p><?php echo $PXP_FORTE_DESCRIPTION; ?></p>
                  </div>
                  <div class="in-mcontainer-izq-img">
                     <img src="https://enzactamedia.enzacta.com/prod/images/ear-brown-rice.jpg" alt="spike brown rice">
                  </div>
               </div>
               <div class="in-mcontainer-der">
                  <img src="https://enzactamedia.enzacta.com/prod/images/spoon-pxp-forte.jpg" alt="alfa PXP FORTE - spoon">
               </div>
               <span class="cf"></span>
            </div>
            <div class="in-scontainer">
               <div class="in-spoints-sm">
                  <p class="in-scontainer-get"><?php echo $STR_BENEFICED_WORD; ?></p>
                  <ul>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_ONE; ?></p>
                     </li>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_TWO; ?></p>
                     </li>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_THREE; ?></p>
                     </li>
                  </ul>
                  <p style="border: solid; color: #34383D; padding: 10px; margin-right:30px;"><?php echo $STR_FDA_STATEMENT; ?></p>
               </div>
               <div class="in-simage">
                  <img src="https://enzactamedia.enzacta.com/prod/images/alfa-pxp-forte-bottle-ingredient.jpg" alt="alfa PXP FORTE - Bottle ingredients">
               </div>
               <div class="in-spoints">
                  <p class="in-scontainer-get"><?php echo $STR_BENEFICED_WORD; ?></p>
                  <ul>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_ONE; ?></p>
                     </li>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_TWO; ?></p>
                     </li>
                     <li>
                        <p><?php echo $PXP_FORTE_BENEF_THREE; ?></p>
                     </li>
                  </ul>
                  <p style="border: solid; color: #34383D; padding: 10px;"><?php echo $STR_FDA_STATEMENT; ?></p>
               </div>
               <span class="cf"></span>
            </div>
            <div class="in-bottom-product">
               <div class="t_align_c avai_prod">
                  <p><?php echo $PXP_FORTE_AVAIBLE; ?></p>
               </div>
            </div>
            <hr class="divider_type_2">
            <!--footer-->
            <footer class="bg_light_3 contentinfo">
               <!--top part-->
               <section class="footer_top_part">
                  <div class="container relative">
                     <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 m_bottom_30 ">
                           <h5 class=" fw_light m_bottom_20 t_align_c fon_siz_16"><?php echo $STR_FOOTER_CONTACTUS; ?></h5>
                           <ul class="fw_light w_break m_xs_bottom_8 ali_cen">
                              <li class="m_bottom_8  fon_siz_14">
                                 <div class="d_inline_m icon_wrap_size_1 bor_rad_green circle m_right_10">
                                    <i class="icon-phone-1"></i>
                                 </div>
                                 <?php
                                   if ($data_country == 'TW'){ echo $STR_FOOTER_PHONE_TW;} 
                                     else {
                                       echo $STR_FOOTER_PHONE;
                                     }
                                 ?>
                              </li>
                              <li class="m_bottom_8 fon_siz_14">
                                 <div class="d_inline_m icon_wrap_size_1 bor_rad_green circle m_right_10">
                                    <i class="icon-mail-alt"></i>
                                 </div>
                                  <?php
                                   if ($data_country == 'HK'){ echo $STR_FOOTER_MAIL_HK;} 
                                     else if ($data_country == 'TW'){ echo $STR_FOOTER_MAIL_TW;}
                                     else if ($data_country == 'GB'){ echo $STR_FOOTER_MAIL_UK;}
                                     else if ($data_country == 'NZ'){ echo $STR_FOOTER_MAIL_NZ;}
                                     else if ($data_country == 'AU'){ echo $STR_FOOTER_MAIL_AU;}
                                     else if ($data_country == 'CA'){ echo $STR_FOOTER_MAIL_CA;}
                                     else {
                                       echo $STR_FOOTER_MAIL;
                                     }
                                 ?>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 m_bottom_30 ">
                           <h5 class=" fw_light m_bottom_10 t_align_c fon_siz_16"><?php echo $STR_FOOTER_KEEP_CONTACT; ?></h5>
                           <ul class="hr_list social_icons ali_cen">
                              <!--tooltip_container class is required-->
                              <li class="m_right_15 m_bottom_15 tooltip_container">
                                 <!--tooltip-->
                                 <span class="d_block r_corners color_default tooltip fs_small tr_all"><?php echo $STR_FOOTER_FOLLOW_FACE; ?></span>
                                 <a href="//www.facebook.com/ENZACTA" target="_blank" class="d_block facebook icon_wrap_size_2 circle color_grey">
                                 <i class="icon-fb fs_small"></i>
                                 </a>
                              </li>
                              <li class="m_right_15 m_bottom_15 tooltip_container">
                                 <!--tooltip-->
                                 <span class="d_block r_corners color_default tooltip fs_small tr_all"><?php echo $STR_FOOTER_FOLLOW_TWITTER; ?></span>
                                 <a href="//twitter.com/ENZACTA" target="_blank" class="d_block twitter icon_wrap_size_2 circle color_grey">
                                 <i class="icon-tw fs_small"></i>
                                 </a>
                              </li>
                              <li class="m_right_15 m_bottom_15 tooltip_container">
                                 <!--tooltip-->
                                 <span class="d_block r_corners color_default tooltip fs_small tr_all"><?php echo $STR_FOOTER_FOLLOW_YOUTUBE; ?></span>
                                 <a href="//www.youtube.com/user/CorporativoEnzacta" target="_blank" class="d_block youtube icon_wrap_size_2 circle color_grey">
                                 <i class="icon-youtube-play fs_small"></i>
                                 </a>
                              </li>
                              <li class="m_right_15 m_bottom_15 tooltip_container">
                                 <!--tooltip-->
                                 <span class="d_block r_corners color_default tooltip fs_small tr_all"><?php echo $STR_FOOTER_FOLLOW_INSTAGRAM; ?></span>
                                 <a href="//www.instagram.com/enzacta/" target="_blank" class="d_block instagram icon_wrap_size_2 circle color_grey">
                                 <i class="icon-instagramm fs_small"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 m_bottom_30">
                           <img class="whi_logo" src="https://enzactamedia.enzacta.com/prod/images/ENZACTA-life-rebuilt-logo.svg" alt="ENZACTA-life-rebuilt-logo"/>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="footer_bottom_part t_align_c bg_light_4 fw_light">
                  <div class="container relative">
                     <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 m_bottom_15 rigths t_align_c">
                           <p><?php echo $STR_FOOTER_LEGAL; ?></p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 m_top_10">
                           <span id="siteseal">
                              <script async type="text/javascript" src="//seal.godaddy.com/getSeal?sealID=21302870220499fa81c1271165f16689a17e4d00547832559334422006"></script>
                           </span>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 m_bottom_10">
                           <script src="//cdn.ywxi.net/js/inline.js?w=120"></script>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 m_bottom_10">
                          <?php
                          if ($data_country == 'US') { ?>
                          <a href="//www.dsa.org/forms/CompanyFormPublicMembers/view?id=618DC00000035" target="_blank">
                            <img src="https://enzactamedia.enzacta.com/prod/images/dsa.png" alt="Direct Selling Association Logo" style="width: 72px;">
                          </a>
                          <?php } ?>
                        </div>
                     </div>
                  </div>
               </section>
            </footer>
         </div>
         <!--back to top button-->
         <button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
         <i class="icon-angle-up fs_large"></i>
         </button>
         <!--Libs-->
         <!--include scripts-->
         <script src="../plugins/owl-carousel/owl.carousel.min.js"></script>
         <script src="../plugins/jackbox/js/jackbox-packed.min.js"></script>
         <script src="../plugins/jquery.appear.js"></script>
         <script src="../plugins/afterresize.min.js"></script>
         <script src="../plugins/twitter/jquery.tweet.min.js"></script>
         <script src="../plugins/flickr.js"></script>
         <script src="../plugins/jquery.easing.1.3.js"></script>
         <!--Theme Initializer-->
         <script src="../js/theme.plugins.js"></script>
         <script src="../js/theme.js"></script>
      </body>
   </html>
