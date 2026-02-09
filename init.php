<?php
// Start Session
session_start();

// Autoload classes
require_once "autoloader.php";

// Include the main configuration file
require_once "config/config.php";

// Load Database
// require_once "classes/Database.php";

// Include helper function
require_once "helpers.php";

// Define global constants
define("APP_NAME", "CMS PDO System");
?>