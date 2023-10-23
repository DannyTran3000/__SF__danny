<?php
// Define constants for the database connection parameters
define('DB_HOST', 'localhost'); // Database host
define('DB_USERNAME', 'root'); // Database username
define('DB_PASSWORD', ''); // Database password
define('DB_DATABASE', 'sf_danny'); // Database name

// Create a new MySQLi object and establish a database connection
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check for a connection error
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error); // Terminate script if the connection fails
}

// Define a function to execute SQL queries
function query($sql)
{
  global $db; // Access the global $db object
  return $db->query($sql); // Execute the SQL query and return the result
}
