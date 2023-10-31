<?php
class ServiceModel
{
  public function getAll()
  {
    $result = query('SELECT * FROM services');

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
