<?php
  $env_dir = __DIR__ . '/env.php';

  if (file_exists($env_dir)) {
    include $env_dir;
  }

  if (!function_exists('env')) {
    function env($key, $default = null)
    {
      $value = getenv($key);

      if ($value === false) {
        return $default;
      }

      return $value;
    }
  }

  // require './database/session.php';

  // spl_autoload_register(function($className) {
  //   $file = __DIR__ . '\\' . 'database' . '\\' . $className . '.php';
  //   $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
  //   if (file_exists($file)) {
  //     include $file;
  //   }
  // });

?>
