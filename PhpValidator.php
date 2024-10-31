<?php

if (!class_exists("PhpValidator")) {

  require_once 'EzPlugin.php';

  class PhpValidator extends EzPlugin {

    public function __construct() {
      $this->name = "PHP Pseudo Compiler";
      $this->adminLogo = $this->mainLogo = $this->key = "php-validator";
      $this->slogan = "PHP Pseudo Compiler";
      $this->class = __CLASS__;
      parent::__construct(__DIR__ . '/php-validator.php');
    }

    static function install($dir = '', $mOptions = 'phpvalidator') {
      parent::install(__DIR__, 'phpvalidator');
    }

    static function uninstall($mOptions = 'phpvalidator') {
      parent::uninstall('phpvalidator');
    }

  }

} //End Class PhpValidator
