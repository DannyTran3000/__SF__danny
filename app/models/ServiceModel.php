<?php
// Include the configuration file (assuming ROOT_PATH is defined in config.php)
require_once(ROOT_PATH . 'config.php');

// Define a class named ServiceModel
class ServiceModel
{
  // Method to retrieve all records from the 'services' table
  public function getAll()
  {
    // Execute a SQL query to select all records from the 'services' table
    $result = query('SELECT * FROM services');

    // Fetch the result as an associative array and return it
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
