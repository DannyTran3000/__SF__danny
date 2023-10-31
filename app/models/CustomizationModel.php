<?php
class CustomizationModel
{
  public function getAll()
  {
    $result = query('SELECT * FROM customization');

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
