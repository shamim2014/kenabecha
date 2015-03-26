<?php
 //include("PageComponent.php");
class MainFooter implements PageComponent
{
    	function getMainFooter()
		{
			$menu ="<div id='site-floor'>";
			$menu .="<div class='wrap'>";
			$menu .="<div class='row'>";
			$menu .="<div class='col6' id='facebook'>";
			$menu .="<div class='smile-logo'>";
			$menu .="<a href='/bn'>http://www.facebook.com/pages/Bikroycom/323359307726413</a>";
			$menu .="</div>";
			$menu .="<a href='http://www.facebook.com/pages/Bikroycom/323359307726413' class='link'><span>Bikroy.com</span>on Facebook</a>";
			$menu .="</div>";
			$menu .="<div class='col6' id='floor-nav'>";
			$menu .="<ul class='flat'>";
			$menu .="<li>";
			$menu .="<a href='/bn/help/about'>আমাদের কথা</a>";
			$menu .="</li>";
			$menu .="<li>";
			$menu .="<a href='/bn/help'>হেল্প ও সাপোর্ট</a>";
			$menu .="</li>";
			$menu .="<li>";
			$menu .="<a href='/bn/terms'>শর্তাবলী এবং নীতিমালা</a>";
			$menu .="</li>";
			$menu .="<li>";
			$menu .="<a href='/bn/privacy_policy'>গোপনীয়তার নীতিমালা</a>";
			$menu .="</li>";
			$menu .="</ul>";
			$menu .="<div id='cross-links'>";
			$menu .="Saltside Technologies কর্তৃক স্বত্বাধিকার সংরক্ষিত";	
			$menu .="</div>";
			$menu .="</div>";
			$menu .="</div>";
			$menu .="</div>";
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
		
      	public function Display()
	 	{
	     	return $this->getMainFooter();
	  	}

}
?>

