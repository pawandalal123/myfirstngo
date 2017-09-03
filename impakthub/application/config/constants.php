<?php 
       $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "http://" : "http://";
    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? true : false;
    define('HTTP_HOST', $protocol. $_SERVER['HTTP_HOST'].'/impak/impakthub/');
    define('SITE_URL', HTTP_HOST);
    define('isSecure', $isSecure);
    define('HTTP_HOST_LINK',SITE_URL.'index.php');
	define('SITE_DEFAULT_TITLE', 'ImpaktHub');
    define('COMPANY_NAME', 'ImpaktHub Pvt. Ltd.');
    define('COMPANY_SIGNATURE', 'ImpaktHub'); 
	define('metaname','<meta name="google-site-verification" content="GBY6-Cw7u1f_7Ed5Tni7d1eMtrlRu7hoFDvgZrs5Skg" />');   
    define('SITE_DIRECTORY',$_SERVER['DOCUMENT_ROOT'].'/');
    define('ADMIN_EMAIL','');
    define('ADMIN_EMAIL_NAME','');
    define('WEBROOT_PATH_WEB_ASSETS', SITE_URL.'assets/');
	define('WEBROOT_PATH_ADMIN_ASSETS', SITE_URL.'adminassets/');
	
	define('WEBROOT_PATH_ADMIN_PATH', SITE_URL.'administrator/');
   
?>
