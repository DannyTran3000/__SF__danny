<?php
/*
  |--------------------------------------------------------------------------
  |   Constants
  |--------------------------------------------------------------------------
  |
  |   Define constants which are used throughout the application.
  |
*/
define('DIR', '../');
define('DIR_APP', DIR . 'app/');

/*
  |--------------------------------------------------------------------------
  |   Include
  |--------------------------------------------------------------------------
  |
  |   Include necessary files for the application. Files should be imported
  |   in a correct order.
  |
*/
require_once DIR . 'config/index.php';

/*
  |--------------------------------------------------------------------------
  |   ENV
  |--------------------------------------------------------------------------
  |
  |   Load the .env file.
  |
*/
$SYSTEM->load_env();

/*
  |--------------------------------------------------------------------------
  |   Router
  |--------------------------------------------------------------------------
  |
  |   Initiate routes for the application.
  |
*/
$ROUTER->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
