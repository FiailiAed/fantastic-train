<?php
  require __DIR__ . '/../vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
  $dotenv->safeLoad();

  use BaseView\Base as BaseView;
  use Views\PlayersView as Players;

  $playersBtnHtml = new Players();
  new BaseView(null, $playersBtnHtml->render());
?>
