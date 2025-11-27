<?php

require_once "../application/config/config.php";
require_once "../application/Core/Database.php";

echo password_hash("12345", PASSWORD_DEFAULT);
session_start();
print $_SESSION['msg'];

echo GCLOUD_URL_ROOT;

?>