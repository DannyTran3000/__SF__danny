<?php
function include_view($file_path, $variables = array(), $print = true)
{
  // Extract the variables to a local namespace
  extract($variables);

  // Start output buffering
  ob_start();

  // Include the template file
  include $file_path;

  // End buffering and return its contents
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