<?php
// Include the configuration file (assuming ROOT_PATH is defined in config.php)
require_once(ROOT_PATH . 'config.php');

// Define a class named CustomizationModel
class CustomizationModel
{
  // Method to retrieve all records from the 'customization' table
  public function getAll()
  {
    // Execute a SQL query to select all records from the 'customization' table
    $result = query('SELECT * FROM customization');

    // Fetch the result as an associative array and return it
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
