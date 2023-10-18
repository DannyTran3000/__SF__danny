<?php
require_once '../config/index.php';

$config = new Config();

require_once $config->get_root_path('app/controllers/PageController.php');
require_once $config->get_root_path('app/controllers/PageController.php');

$uri = rtrim($_SERVER['REQUEST_URI']);
$split_uri = explode('?', $uri);

$path = $path = '/' ? '/' : rtrim($split_uri[0], '/');

$queries = [];
if (isset($split_uri[1])) {
  $params = explode('&', $split_uri[1]);
  for ($i = 0; $i < count($params); $i++) {
    $splitParam = explode('=', $params[$i]);
    if (count($splitParam) >= 2) {
      $queries[$splitParam[0]] = "$splitParam[1]";
    }
  }
}

$page_controller = new PageController();
$page_controller->index($path, $queries);