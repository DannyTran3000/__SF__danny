<?php
require_once(ROOT_PATH . 'controllers/ContactController.php');
require_once(ROOT_PATH . 'controllers/PageController.php');

$contact_controller = new ContactController();
$page_controller = new PageController();
class Router
{
  public function dispatch($method, $p, $q)
  {
    $routes = [
      '/' => [
        'GET' => function (...$args) {
          global $page_controller;
          return $page_controller->index(...$args);
        }
      ],
      '/contact' => [
        'POST' => function () {
          global $contact_controller;
          return $contact_controller->index();
        }
      ]
    ];

    $action = null;

    echo "<script>console.log('go here" . ', ' . $p . "');</script>";

    if (isset($routes[$p]))
      $action = isset($routes[$p][strtoupper($method)]) ? $routes[$p][strtoupper($method)]($p, $q) : null;

    if (isset($action)) {
      $action();
    } else {
      echo "Page Not Found";
    }
  }
}