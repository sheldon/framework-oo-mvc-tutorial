<?php
function __autoload($class_name){
  include("$class_name.php");
}

$url_parts = explode("/", $_GET['route']);

$router = new Router;

if($controller_class = $router->route($url_parts)){
  $controller = new Controller;
}else{
  header("HTTP/1.0 404 Not Found");
  echo "<h1>Not Found, try again</h1>";
}
?>