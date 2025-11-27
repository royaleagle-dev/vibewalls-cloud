<?php

session_start();

// Required headers for CORS
//header("Access-Control-Allow-Origin: https://yourfrontenddomain.com"); 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization"); // Important: Include headers your client sends
header("Access-Control-Max-Age: 3600"); // Cache preflight response for 1 hour
header("Access-Control-Allow-Credentials: true");
// header("Content-Type: application/json; charset=UTF-8");

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(204); // No Content
    exit();
}

// --- Your main script logic starts here ---
// ...

require_once "loader.php";
require_once "../application/Core/Database.php";

new Router();



?>