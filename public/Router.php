<?php
class Router{
  public $controllers = array("hello", "goodbye");
  
  public function route($url_parts){
    if(in_array($url_parts[0], $this->controllers)) return 1;
  }
}
?>