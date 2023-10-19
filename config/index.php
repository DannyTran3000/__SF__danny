<?php
define('DB_HOST', 'localhost');   // Database host (usually 'localhost')
define('DB_USERNAME', 'root'); // Database username
define('DB_PASSWORD', ''); // Database password
define('DB_DATABASE', 'sf_danny'); // Database name


$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}