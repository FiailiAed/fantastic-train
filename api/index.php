<?php
  require __DIR__ . '/../vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
  $dotenv->safeLoad();

  use BaseView\Base as BaseView;
  new BaseView(null, null);
?>
