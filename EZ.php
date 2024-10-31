<?php

require_once 'DbHelper.php';
require_once 'lib/Logger.php';
$GLOBALS['log'] = $log = new Logger();

// Suppress errors on AJAX requests
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  error_reporting(E_ERROR | E_PARSE);
// CORS headers
  header("access-control-allow-origin: *", true);
  header("access-control-allow-methods: GET, POST, PUT, DELETE, OPTIONS", true);
}

if (!class_exists("EZ")) {

  require 'EZCom.php';

  class EZ extends EZCom {

  }

}

EZ::$slug = 'php-validator';
EZ::$wpslug = 'php-validator-lite';
EZ::$class = "PhpValidator";
EZ::$name = "PHP Pseudo Compiler";
EZ::$isPro = file_exists(__DIR__ . '/admin/options-advanced.php');

// construct DB object after defining EZ
$GLOBALS['appPrefix'] = $appPrefix = 'php_';
$GLOBALS['db'] = $db = new DbHelper();

if (!EZ::isInWP()) {
  require_once 'admin/lang.php';
}

EZ::$options = EZ::getOptions();
if (!empty(EZ::$options['salt'])) {
  EZ::$salt = EZ::$options['salt'];
}

// For 4.3.0 <= PHP <= 5.4.0
if (!function_exists('http_response_code')) {

  function http_response_code($newcode = NULL) {
    static $code = 200;
    if ($newcode !== NULL) {
      if (!headers_sent()) {
        header('X-PHP-Response-Code: ' . $newcode, true, $newcode);
        $code = $newcode;
      }
    }
    return $code;
  }

}
