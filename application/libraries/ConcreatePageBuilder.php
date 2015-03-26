<?php
  include("PageBuilder.php");
  include("PageComposite.php");
  include('MainHeader.php');
  include("ConcreateBodyCreator.php");
  include('Itembox.php');
  include("MainFooter.php");
  
   class ConcreatePageBuilder implements PageBuilder
  {    
      private $newPage;
	  public $mainheader,$mainbody,$itembox,$mainfooter;
      
      function mainHeader()
	  {  
	      $this->mainheader= new MainHeader;
	  }
	  function mainBody($bodyType)
	  {    
		   $bodyCreator= new ConcreateBodyCreator;
	       $this->mainbody= $bodyCreator->factoryMethod($bodyType);
		   
	  }
	   function itemBox()
	  {
	      $this->itembox= new Itembox;
	  }
	  function mainFooter()
	  {
	      $this->mainfooter= new MainFooter;
	  }
	  function getPage()
	  {
		 $pageComposite = new PageComposite;
		 $pageComposite->add($this->mainheader);
		 $pageComposite->add($this->mainbody);
		 $pageComposite->add($this->itembox);
		 $pageComposite->add($this->mainfooter);
	     $newPage = $pageComposite->display();
		 
	     return  $pageComposite;
	  }
  }
  
?>