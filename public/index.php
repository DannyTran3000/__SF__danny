<?php
// Define the root path for your application
define('ROOT_PATH', '../app/');

// Include the PageController class
require_once ROOT_PATH . 'controllers/PageController.php';
require_once ROOT_PATH . 'helper.php';

// Get the request URI and remove any trailing slashes
$uri = rtrim($_SERVER['REQUEST_URI']);

// Split the URI into path and query components
$split_uri = explode('?', $uri);
$path = $split_uri[0] == '/' ? '/' : rtrim($split_uri[0], '/');

// Initialize an array to store query parameters
$queries = [];

// Check if there are query parameters in the URI
if (isset($split_uri[1])) {
  // Split query parameters into an array
  $params = explode('&', $split_uri[1]);

  // Iterate through query parameters
  for ($i = 0; $i < count($params); $i++) {
    // Split each parameter into its key and value
    $splitParam = explode('=', $params[$i]);

    // Check if there are at least two components (key and value)
    if (count($splitParam) >= 2) {
      // Store the query parameter in the $queries array
      $queries[$splitParam[0]] = "$splitParam[1]";
    }
  }
}

// Create an instance of the PageController class
$page_controller = new PageController();

// Call the index method of PageController and pass the path and queries
$page_controller->index($path, $queries);
