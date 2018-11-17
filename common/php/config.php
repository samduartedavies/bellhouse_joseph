<?php
session_start();
//SEO
define("SITE_NAME", "Hayward &amp; Green");
define("SITE_COLOR", "#00408c");

//Debug Mode
define("SITE_DEBUG", TRUE);

//Site Install Directory
define("SITE_DIRECTORY", '/');

//Site URL
define("SITE_URL",getenv('SITE_URL') );

//Site ROOT URL
define("SITE_ROOT", "d:/REPOS/bellhouse_joseph/" );

//Google Analytics UA code
define("GA_UA","UA-5087503-1");


//DO NOT EDIT
include  SITE_ROOT .'common/php/functions.php';

?>