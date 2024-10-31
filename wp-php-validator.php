<?php

require_once 'PhpValidator.php';

if (class_exists("PhpValidator")) {
  $phpvalidator = new PhpValidator();

  $phpvalidator->init();
  
}

if (!function_exists('get_plugins')) {
  require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
