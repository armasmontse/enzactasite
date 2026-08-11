<?php
// admin URL
$mosConfig_dyanmic_ADMIN_site = 'index.php?option=com_content&task=view&id=36&Itemid=218';
// this is the admin subdirectory
$mosConfig_dynamic_admin_MEX ="adenz06";
$mosConfig_dynamic_admin_USA ="admin06";
$mosConfig_dynamic_admin_KOR ="adkor06";
$mosConfig_dynamic_admin_TWN ="adtwn06";
$mosConfig_dynamic_admin_MITROL ="admitrol06";
$mosConfig_dynamic_admin_MDM ="admdm06";
$mosConfig_dynamic_admin_MNG ="admng06";
$mosConfig_dynamic_admin_HKG ="adhkg06";
$mosConfig_dynamic_admin_ALL ="admin06,adenz06,adkor06,admitrol06,admdm06,adtwn06,adhkg06,admng06";
//$mosConfig_dynamic_admin ="adenz06";
$mosConfig_admin_shopper_groupid = "8";
#TODO$mosConfig_dynamic_nouser_ALL ="www,wwwmx,wwwph,wwwgt,wwwes,wwwla,wwwca,wwwus,wwwsv,wwwtw,wwwmn";
$mosConfig_dynamic_nouser_ALL ="www,wwwmx,wwwgt,wwwes,wwwla,wwwca,wwwus,wwwsv,wwwtw,wwwmn";
//$registration_countries = "'USA','MEX','CAN','GTM','SLV','COL','AUS','ESP','PHL','KOR','NZL','TWN','GBR','MNG'";
#TODO$registration_countries = "'USA','MEX','CAN','GTM','SLV','COL','AUS','ESP','PHL','KOR','NZL','TWN','JPN','GBR','HKG', 'MNG'";
$registration_countries = "'USA','MEX','CAN','GTM','SLV','COL','AUS','ESP','KOR','NZL','TWN','JPN','GBR','HKG', 'MNG'";
$config_exclude_countries = "''";
$mosConfig_invoice_countries = "MEX";
$mosConfig_invoice_route= "C:/invoicefiles/";
#TODO$old_registration_countries="'USA','PHL'";
$old_registration_countries="'USA'";
$mos_NZ_parent_ibo = '7204643';   // Registrion is only allowded to downline of this IBO
$mosConfig_live_imagesite = "images/card_images";
/*$mosConfig_httphost = explode(".", $_SERVER['HTTP_HOST']);
array_shift($mosConfig_httphost);
$mosConfig_domain = implode(".",$mosConfig_httphost);

$mosConfig_domain_root_user = '';

$mosConfig_absolute_path = 'e:/Websites/'.$mosConfig_domain.$mosConfig_domain_root ;
$mosConfig_live_site_SSL = 'http://';
*/

define('__MEMCACHED_HOST__',"10.131.1.85:11211");
define('MEMCACHE_MODE','DEV'); //two modes available-> 'DEV' & 'PROD'
define('MEMCACHE_EXPIRE_LOW','30'); 
define('MEMCACHE_EXPIRE_MED','300');
define('MEMCACHE_EXPIRE_HIGH','30000');
define('MEMCACHE_EXPIRE_DEV','3'); 

$mosConfig_httphost = explode(".", $_SERVER['HTTP_HOST']);
$mosconfig_start=$mosConfig_httphost[0];
$mosconfig_site=$mosConfig_httphost[2];

$is_test = true;

array_shift($mosConfig_httphost);
$mosConfig_domain = implode(".",$mosConfig_httphost);

$mosConfig_domain_root_user = '/montsea/enzactasite';

// cross domain submit link for MDM Site
$mosConfig_MDM_submit_link = "http://www.mdm-university.net/montsea/enzactasite/Customer/index.php?option=login";

$mosConfig_domain_root = $mosConfig_domain_root_user.'/Customer';
if ($mosConfig_domain != 'ezsoftqa.com') { 
   $mosConfig_absolute_path = 'C:/websites/ezsoftqa.com'.$mosConfig_domain_root ;
   $mosConfig_absolute_root_path = 'C:/websites/ezsoftqa.com'.$mosConfig_domain_root_user ; 
} else {                            
  $mosConfig_absolute_path = 'C:/websites/'.$mosConfig_domain.$mosConfig_domain_root ;
  $mosConfig_absolute_root_path = 'C:/websites/'.$mosConfig_domain.$mosConfig_domain_root_user ;
}

$mosConfig_live_site_SSL = 'https://';
if ($_SERVER['SERVER_PORT']=="443") {
   ini_set('session.cookie_secure', 1);
}

if( strpos($_SERVER['HTTP_HOST'], 'mdmcommunity') !== false || strpos($_SERVER['HTTP_HOST'], 'mitotrol') !== false
|| strpos($_SERVER['HTTP_HOST'], 'mdm-university') !== false){
  $mosConfig_live_site_SSL = 'http://';
  ini_set('session.cookie_secure', 0);
}


// redirecting the page if site url is accompanied by www
if($mosconfig_start=='www' && $mosconfig_site=='ezsoftqa'){
  header( "Location: ".$mosConfig_live_site_SSL.$mosConfig_domain.$mosConfig_domain_root);
  exit();
}   

$mosConfig_dynamic_wwwURL = $mosConfig_live_site_SSL.'www.'.$mosConfig_domain.$mosConfig_domain_root_user;
$mosConfig_live_site = $mosConfig_live_site_SSL.$_SERVER['HTTP_HOST'].$mosConfig_domain_root;
$mosConfig_secure_live_site = $mosConfig_live_site_SSL.$_SERVER['HTTP_HOST'].$mosConfig_domain_root;
$mosConfig_cachepath = 'C:/websites/cache.ezsoftqa.net';

$mosConfig_Max_Result_Rows=2000;
$mosConfig_offline = '0';
// if ($mosconfig_start == '3000000' || $mosconfig_start == '3000008' || $mosconfig_start == '3000100' || $mosconfig_start == '3000200' || $mosconfig_start == '3000300'  || $mosconfig_start == 'www' || $mosconfig_start == 'wwwmx' || $mosconfig_start == 'admin06' ||$mosconfig_start == 'adenz06') {
//     $mosConfig_offline = '0';
//     
// }
//$mosConfig_host = '200.66.103.194:3341';

// Production DB ************************
//$mosConfig_host = '76.12.99.10:3311';
//$mosConfig_user = 'mambophilprod';
//$mosConfig_password = 'L3b0urg3t';
//$mosConfig_db = 'mambophilprod';
//$mosConfig_dbprefix = 'mambophil_';

// #########################################DEV
#$mosConfig_host = 'dev-enzactaprod-2024-cluster.cluster-ckduir0blwwp.ap-northeast-2.rds.amazonaws.com'; //23/04/2025

######DEVELOP#####
$mosConfig_host_read = 'devdb.ezsoftqa.com:3306';
$mosConfig_host = 'devdb.ezsoftqa.com:3306';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = '!IsOR=CraSufoJ3T5tiZiP_IQ9&Uqe&p';
// =============== MAG 260417 [ Isidoro me recomendó cambiar la DB, ya que la que estaba configurada es la de QA ] ===============
// $mosConfig_db = 'mambophilprod';
$mosConfig_db = 'mambophildev';
$mosConfig_dbprefix = 'mambophil_';



############################ PROD ############################
/*$mosConfig_host_read = 'proddbro.enzacta.com:3306';
$mosConfig_host = 'proddbwt.enzacta.com:3306';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = 'vD+N@@&jhUkj?DGLSpm9qE=kSLf7GkjC';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';
*/
############################ PROD ############################




/*$mosConfig_host = '	';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = 'ULk7r%zeb3=*kv6!3e2fg5w+GWC%79kY';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';*/

#READ ONLY
/*$mosConfig_host = 'proddbwt.enzacta.com:3306';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = 'vD+N@@&jhUkj?DGLSpm9qE=kSLf7GkjC';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';*/









//dd('df');


/*
 //Production DB ************************
 $mosConfig_host = '208.112.13.26:3306';
 $mosConfig_user = 'mambophilprod';
 $mosConfig_password = '0n6s4IVU7-i3grV';
 $mosConfig_db = 'mambophilprod';
 $mosConfig_dbprefix = 'mambophil_';
*/
// DEV DB

/*
$mosConfig_host = 'localhost:3322';
$mosConfig_user = 'root';
$mosConfig_password = 'psprucg';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';
$joinToEmail = "angelitac@enzacta.net";
*/

// PRODUCTION REPLICA
//$mosConfig_host = 'enzactarepdb.cloudapp.net:3311';
//$mosConfig_user = 'mambophilprod';
//$mosConfig_password = 'T2ju64mos>';
//$mosConfig_db = 'mambophilprod';
//$mosConfig_dbprefix = 'mambophil_';

// PRODUCTION training

/*
$mosConfig_host = '208.112.13.26:3306';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = '0n6s4IVU7-i3grV';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';
*/
// napaware.com
/*
$mosConfig_host= 'ezsoftqa.net:3322';
$mosConfig_user= 'mamboqa';
$mosConfig_password='IoYXEq.jGbDovN15PnrR';
$mosConfig_db= 'mambophilqa';
$mosConfig_dbprefix = 'mambophil_';
*/
//prod
/*
$mosConfig_host = '208.112.13.26:3306';
$mosConfig_user = 'mambophilprod';
$mosConfig_password = '0n6s4IVU7-i3grV';
$mosConfig_db = 'mambophilprod';
$mosConfig_dbprefix = 'mambophil_';

$IMPORT_HOST = 'ezsoftqa.net:3322';
$IMPORT_USER = 'atrust';
$IMPORT_PWD = 'R36820~YEm0n7UL';
$IMPORT_DB = 'ascensiontrustdev';
$IMPORT__DBPREFIX = 'emyze_';

//products
*//*
$products_host = 'ezsoftqa.net:3322';
$products_user = 'productsdev';
$products_password = '3ypj@2W*5x5fr:;';
$products_dbprefix = 'mambophil_';
$products_db = 'products';*/

$IMPORT_HOST = '76.12.125.130:3306';
$IMPORT_USER = 'atrust';
$IMPORT_PWD = 'R36820~YEm0n7UL';
$IMPORT_DB = 'ascensiontrust';
$IMPORT__DBPREFIX = 'emyze_';


$products_host = 'devdb.ezsoftqa.com:3306';
$products_user = 'mambophilprod';
$products_password = '!IsOR=CraSufoJ3T5tiZiP_IQ9&Uqe&p';
$products_dbprefix = 'mambophil_';
$products_db = 'mambophilproducts';

$ezsoftone_Config_host = 'devdb.ezsoftqa.com:3306';
$ezsoftone_Config_user = 'mambophilprod';
$ezsoftone_Config_password = '!IsOR=CraSufoJ3T5tiZiP_IQ9&Uqe&p';
$ezsoftone_Config_dbprefix = 'mambophil_';
$ezsoftone_Config_db = 'mambophilproducts';


$ftp_export_host = 'ftp.fraserdirect.ca';
$ftp_export_user = 'enzacta';
$ftp_export_pass = 'E4JjU3kk886!';
$ftp_export_port = '5101';
$ftp_export_path = '/uploads';

$mosConfig_lang = "english";
$mosConfig_sitename = 'ezsoftqa International';
$mosConfig_shownoauth = '0';
$mosConfig_useractivation = '0';
$mosConfig_uniquemail = '1';
$mosConfig_offline_message = 'This site is down for maintenance.<br /> Please check back again soon.';
$mosConfig_error_message = 'This site is temporarily unavailable.<br /> Please notify the System Administrator';
$mosConfig_debug = '0'; // 0 for normal use
// 1 for explictic debugging.
$mosConfig_lifetime = '1800';
$mosConfig_MetaDesc = 'ezsoftqa';
$mosConfig_MetaKeys = 'ezsoftqa';
$mosConfig_MetaAuthor = '1';
$mosConfig_MetaTitle = '1';
$mosConfig_locale = 'en_US';
$mosConfig_offset = '0';
$mosConfig_hideAuthor = '1';
$mosConfig_hideCreateDate = '1';
$mosConfig_hideModifyDate = '1';
$mosConfig_hidePdf = '1';
$mosConfig_hidePrint = '1';
$mosConfig_hideEmail = '1';
$mosConfig_enable_log_items = '0';
$mosConfig_enable_log_searches = '1';
$mosConfig_enable_stats = '1';
$mosConfig_sef = '0';
$mosConfig_vote = '0';
$mosConfig_gzip = '0'; //the correct is 0 for products- jaz
$mosConfig_multipage_toc = '0';
$mosConfig_allowUserRegistration = '0';
$mosConfig_link_titles = '0';
$mosConfig_error_reporting = '-1';
$mosConfig_list_limit = '20';
$mosConfig_caching = '1';
$mosConfig_cachetime = '9000';


$mosConfig_mailer = 'smtp';
$mosConfig_mailfrom = 'noreplyqa@enzacta.net';
$mosConfig_smtppass = 'wSsVR60j8hL2XKl+zWD5JOk+ygsBBF7xEUx70FOj7nf0TP+R9sdtxBCYAQahHfcbFW9pETRHpLh4zktR1TcPh9x5yFhTCSiF9mqRe1U4J3x17qnvhDzPXm9cmhSPJYkBwwVjk2VjFM8h+g==';
$mosConfig_smtpuser = 'emailapikey';
$mosConfig_fromname = 'Enzacta Support';
$mosConfig_sendmail = '/usr/sbin/sendmail';
$mosConfig_smtpauth = '1';
$mosConfig_smtphost = 'smtp.zeptomail.com';
$mail_secure = "TLS";
$mail_port = 587;
$mosConfig_missingEmail ='manualprint@napawaredev.com';





$mosConfig_back_button = '1';
$mosConfig_item_navigation = '0';
$mosConfig_secret = 'Vow2HNN1poOkiqzF';
$mosConfig_pagetitles = '0';
$mosConfig_readmore = '0';
$mosConfig_hits = '0';
$mosConfig_icons = '0';
$mosConfig_favicon = '';
$mosConfig_fileperms = '';
$mosConfig_dirperms = '';
$mosConfig_mbf_content = '0';
$mosConfig_helpurl = 'http://help.mamboserver.com';
setlocale (LC_TIME, $mosConfig_locale);
$mosConfig_time_zone = 'US/Eastern';

$mosConfig_image_site = "https://enzactamedia.enzacta.com/prod/Customer";   

if (! defined ('IMAGEURL_REGISTRATION')) {
   define('IMAGEURL_REGISTRATION', $mosConfig_image_site.'/components/com_ibo/images/');
   define('REGISTRATION_ROOT', $mosConfig_secure_live_site.'/index.php?option=com_ibo&Itemid=');
   define('MULTIPLE_PAYMENT_CLASS', $mosConfig_absolute_path.'/administrator/components/com_phpshop/phpshop.cfg.php');
   define('MULTIPLE_PAYMENT', $mosConfig_secure_live_site.'/administrator/components/com_phpshop/classes/');
   define('MULTIPLE_PAYMENT_HTML', $mosConfig_secure_live_site.'/administrator/components/com_phpshop/html/');
   define('LOG4PHP_DIR', $mosConfig_absolute_path.'/components/com_log4php/api');
} 

#$mosConfigToken_ws_2021  = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTZlZmFiYTk2Zjg0MmVkY2ZmZjFmYzRmNWY2YWY3NjQ1NmIzYzEzZmQ0OThiZjA1YjNkOGNhZjYxNzhhYzEzN2YyMWFkMmRlMmY5NGZkMjEiLCJpYXQiOjE2MzQxMzQ2NDAuNTI5MDEzLCJuYmYiOjE2MzQxMzQ2NDAuNTI5MDE5LCJleHAiOjE2NjU2NzA2NDAuNTA3OTM5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.oCQtmGA2EMbOsFtL5jykBTw1-iBujU4a4jhxKD63vmvge2P-tQanWjN9jTrOKPtbtZsZkInFRWVO2d5gF2PYa984pPmSafdzBkwIB2yHIRV6FpeJcoNW-Ps5xqS-pggQ8Q1sUcZG8q3Vfk9SQBXv_IKD89XtR21PhpyeOXuf_Ls_lPwcrXb9cTIKczvSYn_Qy3Kpk2rJbINxlwApG4G1zveFNCiiaY3WEerbG_8atDvE8V4H4P6f9GJCbuTjgEYxriEsbIoogfL8gIfSbRhLzm3rIvaaBBo3lrY2XOf3XuQMhRynOTMfLIRbhWCT6HzuYzf92JznuXdHrsDWswYxWx9UoE7rhPeGrj_O6JjTFk0R0tJDnv2MCZY4sD1kN6tcDlaf42CWjk-0UcV1nsvgrM7pxNfXNaMIGy8vwcjMDDRiY9N69fctL3TYwf3HEhg-XHhk_GUGatoUKPHYdAeH5zgoEYDixz1RPAwHrPDs1TIxKvfjnS48nOPb3BRQP72pP-08TDkVir6s9E0xgW5r20HTFQ7Rncrb3ux92L1up4VZw70TXPYCxKrA1rDiawhJlc0V02MsM7YQQyFpd6wBjy-y9-b4ozOYHPBjt-G1sGgSnML_mfQy5vpN2xwyTHzk7BPOfkOvcjibCeGf5OzdhwFvDJsu2GLmfqyh5CyzWX4';
#$mosConfigUrl_ws_2021 = 'http://ws.goenz.io/enz_apis/public/';
$mosConfigUrl_ws_Invoce = 'https://ezsoftqa.com/montsea/enz_apis_2022/public/api/auth/invoice/create-invoice';
$mosConfigToken_ws_2021='Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNmE5MjFhM2YwMDI1OWRmMmE3YzU5N2I0NThjZDBiZDM2NGE0OTZmMWI4Y2IwMDE1YjM4ZTg3ODIwZjliMjNjMmY3MzYzYjVmYzhlMWI1N2YiLCJpYXQiOjE3NjE3NjIwMjcuNzA3MjYyLCJuYmYiOjE3NjE3NjIwMjcuNzA3MjcxLCJleHAiOjE3OTMyOTgwMjcuMDY3NzUxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.vIk7JfQgmyTkTqaNPdy1qZJFrYkGaEb63aU-jXv9v7cLzbQAHo5wPNeYPPqcwnrQduP_jnX_SY0vUcgnfkOOlCp0At_s-C7CiUR4ri18t3GW-t1OyRGlM0Nl2bjj5eko0DPeXZHJVlUex0EzMh1ZFqBVe4wWKlKWUG3qdTS5V_fMJW92seOQiO-pc268ATy5gVCSqWxNtzOhaP7q-uk-5WTyR9Dc-5DIwbHj4LKkrSBJWjkC2-g5errYrz_ERF86wjMGrw3LoPTBrRqlYzqiMoFD56sYZSR1U0zKkUT5Jzufkf4A-oe7EpzIwh-_5c83Vs4RDiekbkYsy8tqJienRozk-PhgMFv8gPT1DTrkKr-SzThTgAQYAG2AJPqkLEcvUlh1JDG56KhbKljcZhotFxIsZxS6G_Lm442aHazPLxL1ilhIOjo1JHjD8GQlhwn_jyepeEpeP_acRVvEWsYGVMGKfzMOnIVjItD6OfLCsyhjy7vu-6jGoMe_MtU5ZFwLJO9V3fIepI36M-WsjDWKUMFz3NmXRKk8KQQY1ZC4CMOizCt3TkCNRDcIwer_oAoUXDRrGXsXjMF7uI7ni7S3W4UJocFzrLJkmaC9N0pGlEGBM7bSqY--U_t60f-4XqGHVJl0_b4Jd6gtr2tpIknQBWgvxz09dqb51nnVCz_LvJc';
$mosConfigUrl_ws_2021 ='https://ezsoftqa.com/montsea/enz_apis_2022/public/';
$certificate_ssl = 'c:\Program Files\PHP\SSLcurl\cacert.pem';

/*$mosConfigUrl_ws_Invoce = 'https://ezsoftqa.com/urielm/enz_apis_2021/public/api/auth/invoice/create-invoice';
$mosConfigToken_ws_2021='Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTQ1MjA1NDkyNDRlNjExNzY5ZTVmOTVlMWRiZWU1Y2Y2ZmI0ODkwNDUzZjZkYjIwMzkyYWE3NmU5ODAxNDljYzJhYmQ5YTI0NGFhMzY5OTYiLCJpYXQiOjE2NjQyMTk1NjguNzA5OTY4LCJuYmYiOjE2NjQyMTk1NjguNzA5OTgxLCJleHAiOjE2OTU3NTU1NjguNTQwMDA5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.UVbJqmisJ3fOXTNah5l8usxLloc_v5lB69s1mr-nh8ynnm84RmRCedtQN0uTEM-tloH1Y1yd79zhm9kUf5UZX0ejU_5DFRy3rEqkQVGlVECJ2ufqTHAeCBeR07kE9WfKAkk8s0nH8Xx0b2gwftG3ZXIHFccyP3PvfhcjOTGaQRlpS5oiI7Ub0rGFh0BD1X4ZrSwOgTJRZDjYD3xrLerXaYyFTFkfzDw98j9VfK_mqcev_6Eeal3-ZSLnWPIEHjPhMOWJ699xhu6BTc3mFUz5nhMFDwCil2XgbiYimAcbwt22Dh10yQB8h2p90DUgFb5O0_pg35GzPCuHOlqouKUhZ8xLrAoIWmFrD_X1K2oa-zoPk9Mw5146cIEIZj6pko7DkwvpeTWpMEV6105SRDRKhlwKIt848-MVeYXeHYPOaGVcIV2DsLGBhu9X9pfeGC9OKwH2LYrSrzEGQrV7TKjHbS9jZbuM-pNlTYs2jorz9rfPOR3drZJpugW1oPOuMpzHdD1aPGo8XgSRpCj39jWT5S4jkVcN5S9sCU8VXRRIYyN2vXXiU-Z0q1ogylsGmah1G9G1UGvNokhxbMWXAKoZ4s4_W_4nb1Jesmb0dD6UNqTfToFT-spsO-49q7m3e8A4jk0LTsL47M73hvoHYzUkqOURjq2TbL5qpp8q4nxVugU';
$mosConfigUrl_ws_2021 ='https://ezsoftqa.com/urielm/enz_apis_2021/public/';
$certificate_ssl = 'c:\Program Files\PHP\SSLcurl\cacert.pem';*/

define('FACTURACION3_0_EXPIRE','01-05-2022');//DD-MM-YYYY
define('FACTURACION4_0_START','01-05-2022');//DD-MM-YYYY

#for consume or remote
$mosConfigUrl_ws_InvocePhp7 = 'https://ezsoftqa.com/montsea/enzactasite/';
$mosConfigUrl_ws_Php7 = 'https://www.ezsoftqa.com/montsea/enzactaSite/';

//Number of orders sent to ws
define('ORDER_WS_SEND',5);
//Days of delay
define('ORDER_DAYS_DELAY_INVOCE',3);
//Last day februay to validate
define('LAST_DAY_FEBRUARY_DELAY_INVOCE',25);
//Last day monthto validate
define('LAST_DAY_MONTH_DELAY_INVOCE',27);

define('LIST_COMMUNITY_ID',3);
define('COMMUNITY_EXCLUSIVE_ID',4);

define('TIME_DELAY_WAREHOUSE',30);
define('CATEGORY_IGNORE','MN OFFICE');

define('VENDOR_ID_USA','9');
define('VENDOR_ID_CAN','17');
define('VENDOR_ID_MEX','1');

define('PAYMENT_METHOD_INSTALLMENT_ID','104');
define('PAYMENT_METHOD_PAYU_ID','173');
define('MAIL_HYSTORY_YEAR_SHOW','2');

define('INSTALLMENTS_MX_ARRAY', '
{
   "installments":[
      {
         "installment":"3",
         "amount":"3500"
      },
      {
         "installment":"6",
         "amount":"5000"
      }
   ]
}');

$mosConfigPathNodeJs = $mosConfig_absolute_root_path.'/nodejs';
//Auto Login Smart Kit
define('AUTO_LOGIN_SMARTKIT','https://ezsoftqa.com/montsea/new-smart-kit-web/autoLoginSmartkit.php');


#Lambda functions
define('REDPACK_LAMBDA_FUNCTION','redpack_dev'); #Lambda function name DEV:redpack_dev | QA:redpack_qa | PROD:redpack
define('SEGMAIL_LAMBDA_FUNCTION','segmail_dev'); #Lambda function name DEV:segmail_dev | QA:segmail_qa | PROD:segmail
define('SEGMAIL_ENZACTA_CDI_PRICE',150);
define('SEGMAIL_BOX_SIZE',2); //1-Small Box|2-Medium Box|3-Large Box

//define('ENV_SO','ENZDEV001');

#Add constant in configuration file
define('ELECTRONIC_DELIVERY_WEIGHT', '0.000100');
define('FREE_SHIPPING_ELIGIBILTY',14000);
define('FREE_SHIPPING_ELIGIBILTY_SHOW_LABEL',10500);

$woocommerce_banner_enable = true;
$woocommerce_banner_enable_countries = "'KOR'";


#Add in configuration Enzacta file 

define('SHIPPING_ALASKA','Alaska, Hawaii, Puerto Rico');
define('SHIPPING_RATE_NAME_ALASKA','USPS Priority Mail (Alaska, Hawaii, Puerto Rico)');
define('SHIPPING_RATE_NAME_ALASKA_AT','USPS Priority Mail (Alaska, Hawaii, Puerto Rico)');
define('SHIPPING_RATE_NAME_ALASKA_SIGNATURE','USPS Priority Mail + Signature Confirmation (Alaska, Hawaii, Puerto Rico)');

define('SHIPPING_RATE_NAME_GROUND','UPS MI');
define('SHIPPING_RATE_NAME_GROUND_AT','UPS MI - AT');

define('SHIPPING_RATE_NAME_UPS_GROUND','UPS GROUND');
define('SHIPPING_RATE_NAME_UPS_GROUND_AT','UPS MI - AT');

define('SHIPPING_RATE_NAME_FREE_SHIPPING','FREE SHIPPING: UPS GROUND');


#Update value of this constant in configuration Enzacta file

define('CHARLES_CARRIER_SHIPPING_IDS','2,33');
define('CHARLES_CARRIER_AUTOSHIP_SHIPPING_IDS','2,33');


define('TIENDANUBE_DOMAIN','https://mx.shopenzacta.com/productos/');
#Tiendanube Import Process
define('TIENDANUBE_BASE_URL','https://api.tiendanube.com');
define('TIENDANUBE_USER_ID','4842806');
define('TIENDANUBE_ACCESS_TOKEN','d1cf7d78073d94cee6f176f0f054ffb151c2af81');
#$created_at_min = date("Y-m-d");
#$created_at_max = date("Y-m-d");
$created_at_min = '2025-04-18';
$created_at_max = '2025-04-22';
define('TIENDANUBE_API_FETCH_PAID_ORDERS_BY_DATE',
    TIENDANUBE_BASE_URL."/v1/" . TIENDANUBE_USER_ID . "/orders?" .
    "payment_status=paid&" .
    "created_at_min=" . $created_at_min . "T00:00:00-06:00&" .
    "created_at_max=" . $created_at_max . "T23:59:59-06:00"
);
define('TIENDANUBE_EMAIL_AGENT','sistemasmx@enzacta.net');

//SQL8

$WOOSITE_DB_HOST = 'mysql8.ezsoftqa.com:3306';
$WOOSITE_DB_USER = 'mambophilprod';
$WOOSITE_DB_PWD  = 'rlkeph5=h+9t7kuNAthldu2ruwobreceMySQL8';
$WOOSITE_DB_NAME = 'multistore_wp_prod_v3_enzit';


/*$WOOSITE_DB_HOST = 'devdb.ezsoftqa.com:3306';
$WOOSITE_DB_USER = 'mambophilprod';
$WOOSITE_DB_PWD = '!IsOR=CraSufoJ3T5tiZiP_IQ9&Uqe&p';
$WOOSITE_DB_NAME = 'multistore_wp_prod_v4_enzit_org';
*/

define('S3_IBOBLAST','https://enzacta-bucket.s3.dualstack.ap-northeast-2.amazonaws.com/iboblast');


/**
 * Dump and Die
 *
 * @param  mixed  $data
 * @param  boolean $continue true|false
 * @param  string $info Additional Information
 * @param  string $line Line number
 * @param  string $file File name
 * @return void
 */
function dd($data, $continue = false, $info = '', $line = '', $file = '') {
   echo "<div style='background: #f9f9f9; padding: 10px; border: 1px solid #ccc; font-family: monospace;'>";

      if (!empty($info)) {
         echo "<div style='color: green; font-weight: bold;'>$info</div>";
      }

      // Obtener la traza de la llamada
      $backtrace = debug_backtrace();
      $caller = $backtrace[0];
      // Obtener la línea y el archivo desde donde se llamó a la función
      $line = $caller['line'];
      $file = $caller['file'];
      echo "File:<span style='color:green;'>$file </span>";
      echo "<br>Line:<span style='color:green;'>$line </span>";

      echo "<pre>";
         echo "<hr>";
         if (is_array($data)) {
            foreach ($data as $k => $v) {
               $r = rand(0, 128);
               $g = rand(0, 128);
               $b = rand(0, 128);
               $colorHex = sprintf('#%02X%02X%02X', $r, $g, $b);
               echo "<span style='color:".$colorHex.";'>";
               echo "<b>[ $k ]</b> ";
               if(is_array($v)){
                  print_r($v);
               }else{
                  var_dump($v);
               }
               echo "</span>";
            }
         } else {
            var_dump($data);
         }
      echo "</pre>";

   echo "</div>";

   if (!$continue) {
       die();
   } else {
       echo "<br>";
   }
}


/**
 * Function env.
 * This function displays information about the database and the current branch.
 *
 * @author Isidoro Cornelio <eduardoh@enzacta.net>
 *
 * @param bool $debug Optional. true to enable debugging. The default value is false.
 *
 * @return void $infoEnv Information about the database and current branch.
 */
function env($debug=false){
   if($debug){
      global $mosConfig_db,$mosConfig_absolute_root_path;
      $stringfromfile = file($mosConfig_absolute_root_path.'/.git/HEAD', FILE_USE_INCLUDE_PATH);
      $firstLine      = $stringfromfile[0]; //get the string from the array
      $explodedstring = explode("/", $firstLine, 3); //seperate out by the "/" in the string
      $branchname     = $explodedstring[2]; //get the one that is always the branch name
      $infoEnv='DB:'.$mosConfig_db.'|Branch:'.$branchname;
      echo "<div style='background: #f9f9f9; padding: 10px; border: 1px solid #ccc; font-family: monospace;'>";
         echo "<h1 style='color:blue;'>$infoEnv</h1>";
      echo "</div>";
      /*echo "
      <script>
         jQuery(document).ready(function() {
            jQuery(\".admenu\").append(`<li>|</li>
            <li><b style='color:blue; font-size: 13px;'>$infoEnv</b></li>`);
         });
      </script>";*/
      die();
   }
}
env();