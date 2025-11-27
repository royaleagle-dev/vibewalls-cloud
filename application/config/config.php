<?php

//database configuration
define ('HOST', 'sql101.infinityfree.com');
define('USERNAME', 'if0_40440508');
define('PASSWORD', 'Royaleagle2019');
define('DATABASE', 'if0_40440508_vibewalls');

// define ('HOST', 'localhost');
// define('USERNAME', 'root');
// define('PASSWORD', '');
// define('DATABASE', 'vibewalls');

//other site conf
define ('SITE_NAME', 'VibeWalls');
//define ('URL_ROOT', '/');
define ('URL_ROOT', 'http://localhost/vibewalls_v2');
define ('BASE_MEDIA_ROOT', dirname(dirname(__DIR__)));
define ('SYSTEM_ROOT', dirname(__DIR__));
define ('BLOG_ADMIN_EMAIL', 'support@vibewalls');

define("GCLOUD_BUCKET_NAME", 'vibewall-file-storage');
define("GCLOUD_URL_ROOT", 'https://storage.googleapis.com/'.GCLOUD_BUCKET_NAME.'/'.'public/');

define ("DATABASE_TYPE", "SQLITE"); //MYSQL - for mysqli database
define ("ENVIRONMENT", "DEVELOPMENT"); //PRODUCTION - for launching

?>