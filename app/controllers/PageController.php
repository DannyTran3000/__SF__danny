<?php
require_once(ROOT_PATH . 'app/models/CustomizationModel.php');
require_once(ROOT_PATH . "helpers/index.php");

$customization_model = new CustomizationModel();

class PageController
{
  // The PageController class is responsible for handling page requests.

  public function index($p, $q)
  {
    global $customization_model;
    $result = $customization_model->getAll();
    $sections = [];
    foreach($result as $key =>$value)
      $sections[$value['section']] = $value;
    
    // The 'index' method is used to display the home page.
    // It includes the 'Home.php' view to render the content.
    include_with_variables(
      ROOT_PATH . 'app/views/Home.php',
      [
        'data' => [
          'customization' => [
            'hero' => $sections['hero'],
            'about' => $sections['about'],
          ]
        ],
        'status' => 'success'
      ]
    );
  }
}