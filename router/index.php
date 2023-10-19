<?php
// Include the 'PageController.php' file from the 'app/controllers' directory using ROOT_PATH
require_once(ROOT_PATH . 'app/controllers/PageController.php');

// Create an instance of the PageController
$page_controller = new PageController();

// Define a Router class to handle routing logic
class Router
{
  // The dispatch method receives the path ($p) and query parameters ($q)
  public function dispatch($p, $q)
  {
    global $page_controller; // Access the PageController instance

    // Use a switch statement to determine the appropriate action based on the path ($p)
    switch ($p) {
      case '/':
        // Route to the 'index' method of the PageController
        $page_controller->index();
        break;
      default:
        // If the path doesn't match any known routes, display a "Page not found" message
        echo "Page not found";
    }
  }
}