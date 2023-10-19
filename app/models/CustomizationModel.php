<?php
require_once(ROOT_PATH . '/config/index.php');

class CustomizationModel
{
  public function getAll()
  {
    global $db;
    $result = $db->query("SELECT * FROM customization");
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}