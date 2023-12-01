<?php
  include_once("app.php");
  include_once("routes.php");
  include_once("Views.php");

  $request = parse_url($_SERVER["REQUEST_URI"]);
  $url_parts_array = explode("/", ltrim($request['path'], "/"));

  $url = "";

  if(ENVIRONMENT == "development") {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $url = $url_parts_array[1];
  } else {
    $url = $url_parts_array[0];
  }

  $url = $url == "" ? "inicio" : $url;

  $view = new Views();
  $view->get($routes[$url]['view'], $routes[$url]['title'], $routes[$url]['meta']);
?>