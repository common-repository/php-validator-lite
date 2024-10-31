<?php
error_reporting(E_ALL);

require_once '../PhpValidator.php';

if (empty($phpvalidator)) {
  $phpvalidator = new PhpValidator();
  $GLOBALS['phpvalidator'] = $phpvalidator;
}

$phpvalidator->css = array();

$phpvalidator->js = array('php-validator');

require_once 'header-functions.php';

if (menuShown()) {
  $tablesRequired = array('administrator', 'options_meta');
  require_once 'lock.php';
}

include_once('../debug.php');

renderHeader($phpvalidator);
?>
<div class="ch-container">
  <div class="row">
    <?php
    $width = 12;
    if (menuShown()) {
      $menu = array();
      $menu[] = array(
          'url' => 'compile.php',
          'text' => 'Launch It!',
          'id' => 'LaunchIt',
          'class' => 'LaunchIt',
          'icon' => 'play',
          'toggle' => 'popover',
          'trigger' => 'hover',
          'content' => "Launch the PHP Pseudo Compiler now, where you can specify or update files and validate them.",
          'placement' => "right",
          'title' => "Launch It!"
      );

      renderMenu($menu);
      if (!EZ::isTopMenu()) {
        $width = 10;
      }
    }
    ?>
    <div id="content" class="col-lg-<?php echo $width; ?> col-sm-<?php echo $width; ?>">
    <?php
    if (!menuShown()) {
      renderLogo($phpvalidator);
    }
    ?>
    <!-- content starts -->
