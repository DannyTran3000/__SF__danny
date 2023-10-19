<?php
function include_with_variables($file_path, $variables = array(), $print = true)
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