<?php
// Include the configuration file (assuming ROOT_PATH is defined in config.php)
require_once(ROOT_PATH . 'config.php');

// Define a class named ServiceModel
class WorkModel
{
  // Method to retrieve all records from the 'services' table
  public function get_featured_works()
  {
    // Execute a SQL query to select all records from the 'services' table
    $result = query('SELECT * FROM works WHERE featured = TRUE');

    // Fetch the result as an associative array and return it
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
