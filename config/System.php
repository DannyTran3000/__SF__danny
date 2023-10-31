<?php
class System
{
  public function load_env()
  {
    $envFilePath = DIR . '.env';

    if (file_exists($envFilePath)) {
      $env = parse_ini_file($envFilePath, false, INI_SCANNER_RAW);
      if ($env !== false) {
        foreach ($env as $key => $value) {
          $_ENV[$key] = $value;
          putenv("$key=$value");
          $_SERVER[$key] = $value;
        }
      }
    }
  }
}

$SYSTEM = new System();