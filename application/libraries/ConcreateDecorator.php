<?php
     include("Decorator.php");
    class ConcreateDecorator extends Decorator
	{
	   private $compositePage;
	   
	   function ConstructDecorator(&$page)
	   {
	        $this->compositePage=&$page;
	        $arrlength = count($page->childPageComponent);
		    for($x=0;$x<$arrlength;$x++)
  			{    
			     $this->childPageComponent[$x]=$page->childPageComponent[$x];
  			}
	   }
	   
	   public function add(&$c)
	  {
	     $this->childPageComponent[1]=$c;
	  }
      public function remove($c)
	  {
	       $this->childPageComponent[1]=null;
		   $this->compositePage->childPageComponent[1]=null;
		   $c=null;
	  }
      public function display()
	  {
	     	$arrlength = count($this->childPageComponent);
			$source="";
		    for($x=0;$x<$arrlength;$x++)
  			{    
			     if($this->childPageComponent[$x]!=null)
 				 { 
				    $source .=$this->childPageComponent[$x]->display();
				 }	 
  			}
			return $source;
	  }
	  function bodyDecorate($pageBody)
	  {
	      $this->add($pageBody);
		  return $this->display();
	  }
	}
?>