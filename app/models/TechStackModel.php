<?php
require_once(ROOT_PATH . 'config.php');

class TechStackModel
{
  public function getAll()
  {
    $result = query('SELECT * FROM tech_stacks');

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
