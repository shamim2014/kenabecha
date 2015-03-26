<?php
   include('PageComponent.php');
  class PageComposite implements PageComponent
  {
      public $indexOfArray=0;
	  public $childPageComponent=array();
	  
      public function add(&$c)
	  {
	     if($this->indexOfArray<=3)
	     {
		     $this->childPageComponent[$this->indexOfArray]=&$c;
		     $this->indexOfArray++;
		  }
		  else
		  {
		     $this->childPageComponent[1]=$c;
		  }
	  }
      public function remove($c)
	  {
	       $this->childPageComponent[1]=null;
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
  }
?>

