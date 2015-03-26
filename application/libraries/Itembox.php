<?php
class ItemBox
{
	function getItemBox()
	{
		
		$menu = "<div class='wrap'>";
		$menu .= "<div class='item-box'>";
		$menu .= "<h2 style='padding-top:20px'>কোনো কিছু বিক্রি করার কথা ভাবছেন?</h2>";
		$menu .= "<p>Kenabeca.com এ বিজ্ঞাপন দিন, সম্পূর্ণ বিনামূল্যে!</p>";
		$menu .= "<div class='btn-wrapper'>";
		$menu .= "<div class='bg left'></div>";
		$menu .= "<div class='bg right'></div>";
		$menu .= "<div class='btn-border'>";
		$menu .= "<a  style='text-decoration:blink 'href='NewAd' class='btn large post'><span class='large'>ফ্রি বিজ্ঞাপন দিন</span></a>";
		$menu .= "</div>";
		$menu .= "</div>";
		$menu .= "</div>";
		$menu .= "</div>";
		
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
	     return $this->getItemBox();
	 }
}
?>
