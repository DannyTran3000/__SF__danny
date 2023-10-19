<?php
define('ROOT_PATH', '../');   // Root path

// Include the PageController to use its functions and classes
require_once ROOT_PATH . 'app/controllers/PageController.php';

// Get the current URI and remove trailing slashes
$uri = rtrim($_SERVER['REQUEST_URI']);

// Split the URI into the path and query string
$split_uri = explode('?', $uri);

// Extract the path part (before the '?')
$path = $split_uri[0] == '/' ? '/' : rtrim($split_uri[0], '/');

// Initialize an array to store query parameters
$queries = [];

// Check if there is a query string in the URI
if (isset($split_uri[1])) {
    // Split the query string into individual parameters
    $params = explode('&', $split_uri[1]);

    // Loop through the query parameters
    for ($i = 0; $i < count($params); $i++) {
        // Split each parameter into its key and value
        $splitParam = explode('=', $params[$i]);

        // Check if the parameter has both a key and a value
        if (count($splitParam) >= 2) {
            // Store the parameter in the queries array
            $queries[$splitParam[0]] = "$splitParam[1]";
        }
    }
}

// Create an instance of the PageController
$page_controller = new PageController();

// Call the index method of PageController with the path and queries
$page_controller->index($path, $queries);
