<?php
class WorkModel
{
  public function get_featured_works()
  {
    $result = query('SELECT * FROM works WHERE featured = TRUE');

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
