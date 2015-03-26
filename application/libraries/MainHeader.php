<?php 
    //include("PageComponent.php");
	
class MainHeader implements PageComponent
{
     function getMainHeader()
	 {    
	      $menu="<div class='header'>";
	      $menu .="<ul class='col h-stack flat' id='site-nav'>";
		  $menu .="<li  style='width:130px;'><a  style='text-decoration:none'href='home?pagename=Home'><span>Kenabeha.com</span></a></li>";
		  $menu .="<li  style='width:130px;'><a  style='text-decoration:none' href='allAdd?pagename=Allad'><span>সকল বিজ্ঞাপন</span></a></li>";
		  $menu .="<li  style='width:130px;'><a  style='text-decoration:none' href='help?pagename=Help'><span>হেল্প ও সাপোর্ট</span></a></li>";
		  $menu .="<li  style='width:130px;'><a  style='text-decoration:none' href='login?pagename=login'><span>লগ ইন</span></a></li>";
		  $menu .="<li  style='width:130px;'><a  style='text-decoration:none' href='newAd?pagename=newAd'><span>ফ্রী বিজ্ঞাপণ দিন</span></a></li>";
		  $menu .="</ul>";
		  $menu .="</div>";
		  
		  return $menu;
     }
   
      public function add(&$c)
	  { 
	     echo "Child can't add";
	  }
      public function remove($c)
	  {
	    echo "Child can't remove";
	  }
      public function display()
	  {
	     return $this->getMainHeader();
	 }
}

?>
