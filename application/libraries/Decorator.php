<?php
    
    abstract class Decorator implements PageComponent
	{   
	   public $indexOfArray=0;
	   public  $childPageComponent = array();
	  
	    abstract function bodyDecorate($page);
	}
?>