<?php
require_once(DIR_APP . 'models/CustomizationModel.php');
require_once(DIR_APP . 'models/WorkModel.php');
require_once(DIR_APP . 'models/ServiceModel.php');
require_once(DIR_APP . 'models/TechStackModel.php');

$customization_model = new CustomizationModel();
$work_model = new WorkModel();
$service_model = new ServiceModel();
$tech_stack_model = new TechStackModel();

class PageController
{
  // The PageController class is responsible for handling page requests.

  public function index($p, $q)
  {
    global $customization_model, $work_model, $service_model, $tech_stack_model;

    $customization_result = $customization_model->getAll();
    $sections = [];
    foreach ($customization_result as $key => $value)
      $sections[$value['section']] = $value;

    $service_result = $service_model->getAll();

    $tech_stack_result = $tech_stack_model->getAll();

    $featured_work_result = $work_model->get_featured_works();

    // The 'index' method is used to display the home page.
    // It includes the 'Home.php' view to render the content.
    include_view(
      DIR_APP . 'views/Home.php',
      [
        'data' => [
          'customization' => $sections,
          'services' => $service_result,
          'tech_stacks' => $tech_stack_result,
          'featured_works' => $featured_work_result
        ],
        'status' => 'success'
      ]
    );
  }
}