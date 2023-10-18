<?php
require_once '../config/index.php';

$config = new Config();

class PageController {  
  public function index($p, $q) {
    global $config;
    
    switch ($p) {
      case '/':
        include $config->get_root_path('app/views/Home.php');
        break;
      default:
        echo "Error";
    }
  }
}