<?php
require DIR . 'config/System.php';
require DIR . 'config/Router.php';
require DIR . 'config/Database.php';

function include_view($file_path, $variables = array(), $print = true)
{
  extract($variables);
  ob_start();
  include $file_path;
  $output = ob_get_clean();
  if (!$print) {
    return $output;
  }
  echo $output;
}

function encode_attribute($attr)
{
  $attributes_string = '';

  if (isset($attr)) {
    foreach ($attr as $key => $value) {
      $attributes_string .= $key . '="' . $value . '" ';
    }
  }

  return $attributes_string;
}