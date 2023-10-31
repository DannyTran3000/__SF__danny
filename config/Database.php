<?php
$db_host = getenv('DB_HOST');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');
$db_database = getenv('DB_DATABASE');

$db = new mysqli($db_host, $db_username, $db_password, $db_database);

if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

function query($sql)
{
  global $db;
  return $db->query($sql);
}