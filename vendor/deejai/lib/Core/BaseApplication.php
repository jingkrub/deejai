<?php

require_once 'vendor/deejai/lib/Routing/Router.php';

abstract class BaseApplication {

  private $configuration;
  private $router;
  private $databaseManager;
  private $view;
  private $controller;

  public function __construct() {
    $router = new Router();
  }

}