<?php
 // include("PageComponent.php");
  
  abstract class Body implements PageComponent
  {
     public $source;
     abstract function getMainBody();
  }
  
?>