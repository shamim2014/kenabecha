<?php
 //include('Body.php');
class HomeBody extends Body
{
     
	 function getMainBody()
	 {
	    	 $source  ="<div id ='site-content'><div id='home-top'><div class='wrap'>";
			 $source  .= "<h1 id='header'><a href='/bn/ads-in-bangladesh'>Kenabeha.com এ স্বাগতম - বাংলাদেশের <strong>সর্ববৃহৎ মার্কেট</strong></a></h1>";
			 $source  .= "<p class='slogan'>ক্রয়-বিক্রয় করুন যেকোনো কিছু! <a href='/bn/cars-vehicles-in-bangladesh'>ব্যবহৃত গাড়ি</a>";
			 $source  .= " থেকে শুরু করে <a href='/bn/mobile-phones-in-bangladesh'>মোবাইল ফোন</a>";
			 $source  .= " এবং <a href='/bn/computers-accessories-in-bangladesh'>কম্পিউটার</a>, অথবা খুঁজে নিন নতুন";
			 $source  .= "<a href='/bn/property-in-bangladesh'>প্রপার্টি</a> ও <a href='/bn/jobs-in-bangladesh'>চাকরিসহ</a> আরো";
			 $source  .= "<a href='/bn/ads-in-bangladesh'>অনেক কিছু</a> বাংলাদেশে! <br/>শুধু নিচ থেকে আপনার এলাকাটি বেছে নিন আর শুরু করে দিন:</p>";
			 $source  .= "<div class='row content'><div class='wrap'><div id='map' class='col'>";
    		 $source  .= "<img alt=' - ' height='420' id='map-imagemap'"; 
			 $source  .= "src= 'http://1.ctas.saltsidecdn.net/assets/transparent_map-2ebbd7cb21c3980daa0bddcc9c7ce5fc.gif'";
			 $source  .= "usemap='#bikroy_map' width='340' />";
			 $source  .= "<div id='map-layer'><div class='city dhaka'></div>";
			 $source  .= "<div class='city chittagong'></div>";
			 $source  .= "<div class='city sylhet'></div>";
			 $source  .= "<div class='khulna-division'></div>";
			 $source  .= "<div class='chittagong-division'></div>";
			 $source  .= "<div class='rangpur-division'></div>";
			 $source  .= "<div class='barishal-division'></div>";
			 $source  .= "<div class='rajshahi-division'></div>";
			 $source  .= "<div class='dhaka-division'></div>";
			 $source  .= "<div class='sylhet-division'></div></div>";
		     $source  .= "<div class='tooltip'>";
			 $source  .= "<div class='txt'></div></div><map name='bikroy_map'>";
			 $source  .= "<area class='sylhet' coords='269,120,8' data-title='সিলেট' href='#sylhet' shape='circle'>";
			 $source  .= "<area class='chittagong' coords='270,284,8' data-title='চট্টগ্রাম' href='#chittagong' shape='circle'>";
			 $source  .= "<area class='dhaka' coords='178,193,10' data-title='ঢাকা' href='#dhaka' shape='circle'>";
			 $source  .= "<area class='khulna-division' coords='70,189,81,180,77,165,83,169,90,168,99,179,114,183,111,194,114,200,118,198,125,209,127,209,131,215,128,218,134,236,148,252,146,316,129,328,104,330,101,324,87,237,96,227,76,223,83,206,70,203,69,189' data-title='খুলনা বিভাগ' href='#khulna-division' shape='poly'>";
			$source  .= "<area class='chittagong-division' coords='192,235,221,304,256,280,281,374,300,395,322,346,297,189,271,192,256,242,227,202,234,160,221,159,211,184,205,184,188,217,193,235' data-title='চট্টগ্রামবিভাগ' href='#chittagong-division' shape='poly'>";
			$source  .= "<area class='rangpur-division' coords='44,54,49,28,61,2,103,17,143,31,149,71,144,86,133,91,132,107,110,103,44,51' data-title='রংপুর বিভাগ' href='#rangpur-division' shape='poly'>";
			$source  .= "<area class='barishal-division' coords='147,288,155,319,171,322,206,308,209,271,188,236,170,243,165,237,152,252,152,274,159,271,146,288' data-title='বরিশাল বিভাগ' href='#barishal-division' shape='poly'>";
			$source  .= "<area class='rajshahi-division' coords='39,128,43,138,66,151,78,151,81,166,93,162,100,177,117,179,127,187,134,182,134,172,138,154,134,127,129,106,94,92,94,99,63,94,57,119,47,109,38,130' data-title='রাজশাহী বিভাগ' href='#rajshahi-division' shape='poly'>";
			$source  .= "<area class='dhaka-division' coords='118,186,114,194,122,197,127,207,133,216,139,229,138,237,149,247,164,236,169,235,172,241,177,236,190,235,191,225,188,206,217,173,217,161,229,152,226,127,222,116,215,117,210,110,210,98,139,83,134,112,140,136,138,182,131,185,115,184' data-title='ঢাকা বিভাগ' href='#dhaka-division' shape='poly'>";
			$source  .= "<area class='sylhet-division' coords='238,173,238,166,256,168,272,163,285,146,302,107,276,95,251,100,220,95,209,102,213,117,222,117,227,131,229,155,226,159,237,166' data-title='সিলেট বিভাগ' href='#sylhet-division' shape='poly'>";
		$source  .= "</map></div><div id='region-list' class='col h-stack'><div class='region cities'><h3>শহর</h3>";
        $source  .= "<ul class='flat'><li>";
        $source  .= "<a href='/bn/ads-in-dhaka' class='dhaka'>ঢাকা</a>";
        $source  .= "</li><li><a href='/bn/ads-in-chittagong' class='chittagong'>চট্টগ্রাম</a></li><li>";
        $source  .= "<a href='/bn/ads-in-sylhet' class='sylhet'>সিলেট</a>";
        $source  .= "</li></ul></div><div class='region divisions'><h3>বিভাগ</h3><ul class='flat'>";
        $source  .= "<li><a href='/bn/ads-in-dhaka-division' class='dhaka-division'>ঢাকা বিভাগ</a>";
        $source  .= "</li><li><a href='/bn/ads-in-chittagong-division' class='chittagong-division'>চট্টগ্রামবিভাগ</a></li>";
        $source  .= "<li><a href='/bn/ads-in-sylhet-division' class='sylhet-division'>সিলেট বিভাগ</a></li><li>";
        $source  .= "<a href='/bn/ads-in-khulna-division' class='khulna-division'>খুলনা বিভাগ</a>";
        $source  .= "</li><li><a href='/bn/ads-in-rajshahi-division' class='rajshahi-division'>রাজশাহী বিভাগ</a></li>";
        $source  .= "<li><a href='/bn/ads-in-rangpur-division' class='rangpur-division'>রংপুর বিভাগ</a>";
        $source  .= "</li><li><a href='/bn/ads-in-barishal-division' class='barishal-division'>বরিশাল বিভাগ</a></li>";
        $source  .= "</ul></div></div></div></div></div></div></div>";
		
		 return $source;
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
	     return $this->getMainBody();
	 }
}
?>