<?php
  // include('Body.php');
   class AllAd extends Body
   {
	   public $data,$no,$pageNo;
   	   function setAd($data,$pageNo)
	   {
	       $this->data=$data;
		   $this->pageNo=$pageNo;
		   $this->no=count($this->data);
	   }
      function getMainBody()
	  { 
	    $source = "<div class='AllAd_wrap'>";
	    $source .= "<form action='/bn/ads-in-bangladesh' id='item-search' method='get'>";
		$source .= "<div class='h-stack fields clearfix'>";
		$source .= "<div class='query'>";
		$source .= "<input id='item-search-field' name='query' placeholder='আপনি কি খুঁজছেন' type='text'></div>";
		$source .= "<div class='category'>";
		$source .= "<select id='ad_category_select' name='category'><option value='' selected='selected'>সকল  শ্রেণী</option>";
		$source .= "<option value='192'>গাড়ি ও অন্যান্য যানবাহন</option>";
		$source .= "<option value='193'>&nbsp;&nbsp;গাড়ি</option>";
		$source .= "<option value='194'>&nbsp;&nbsp;পার্টস ও এক্সেসরিজ</option>";
		$source .= "<option value='203'>&nbsp;&nbsp;মটরবাইক্ ও স্কুটার</option>";
		$source .= "<option value='204'>&nbsp;&nbsp;ট্রাক ও ভ্যান</option>";
		$source .= "<option value='602'>&nbsp;&nbsp;বাইসাইকেল</option>";
		$source .= "<option value='205'>&nbsp;&nbsp;অন্যান্য যানবাহন</option>";
		$source .= "<option value='210'>প্রপার্টি</option>";
		$source .= "<option value='211'>&nbsp;&nbsp;এপার্টমেন্ট/ফ্ল্যাট</option>";
		$source .= "<option value='212'>&nbsp;&nbsp;বাড়ি</option>";
		$source .= "<option value='213'>&nbsp;&nbsp;গ্যারেজ</option>";
		$source .= "<option value='214'>&nbsp;&nbsp;রুম ও সাবলেট</option>";
		$source .= "<option value='218'>&nbsp;&nbsp;প্লট/জমি</option>";
        $source .= "<option value='223'>&nbsp;&nbsp;কমার্শিয়াল স্পেস</option>";
		$source .= "<option value='228'>&nbsp;&nbsp;অন্যান্য প্রপার্টি</option>";
		$source .= "<option value='229'>ইলেকট্রনিকস্</option>";
		$source .= "<option value='230'>&nbsp;&nbsp;মোবাইল ফোন</option>";
		$source .= "<option value='231'>&nbsp;&nbsp;মোবাইল ফোন এক্সেসরিজ</option>";
		$source .= "<option value='893'>&nbsp;&nbsp;কম্পিউটার এবং এ্যক্সেসরিজ</option>";
		$source .= "<option value='850'>&nbsp;&nbsp;টিভি ও ভিডিও</option>";
		$source .= "<option value='855'>&nbsp;&nbsp;ক্যামেরা ও ক্যামকরডার</option>";
		$source .= "<option value='846'>&nbsp;&nbsp;অডিও এবং এমপিথ্রি</option>";
		$source .= "<option value='242'>&nbsp;&nbsp;ভিডিও গেম ও কনসোল</option>";
		$source .= "<option value='244'>&nbsp;&nbsp;অন্যান্য ইলেকট্রনিকস্</option>";
		$source .= "<option value='245'>ঘরের দ্রব্যসামগ্রী</option>";
		$source .= "<option value='246'>&nbsp;&nbsp;আসবাবপত্র</option>";
		$source .= "<option value='256'>&nbsp;&nbsp;ঘর ও বাগান</option>";
		$source .= "<option value='263'>&nbsp;&nbsp;কিচেন ও আনুষঙ্গিক</option>";
		$source .= "<option value='579'>&nbsp;&nbsp;অন্যান্য ঘর সামগ্রী</option>";
		$source .= "<option value='273'>ব্যক্তিগত সামগ্রী</option>";
		$source .= "<option value='274'>&nbsp;&nbsp;জামা, জুতো এবং আনুষাঙ্গিক</option>";
		$source .= "<option value='282'>&nbsp;&nbsp;বাচ্চাদের জামাকাপড় ও খেলনা </option>";
		$source .= "<option value='288'>&nbsp;&nbsp;স্বাস্থ্য ও সৌন্দর্য</option>";
		$source .= "<option value='294'>&nbsp;&nbsp;হস্তশিল্প</option>";
		$source .= "<option value='298'>&nbsp;&nbsp;অন্যান্য ব্যক্তিগত সামগ্রী</option>";
		$source .= "<option value='594'> কৃষি এবং খাদ্যদ্রব্য</option>";
		$source .= "<option value='595'>&nbsp;&nbsp;ফলমূল</option>";
		$source .= "<option value='596'>&nbsp;&nbsp;শাকসবজি</option>";
		$source .= "<option value='597'>&nbsp;&nbsp;মাছ</option>";
		$source .= "<option value='598'>&nbsp;&nbsp;মাংস</option>";
		$source .= "<option value='599'>&nbsp;&nbsp;ফসল, বীজ এবং গাছ-গাছালি </option>";
		$source .= "<option value='600'>&nbsp;&nbsp;অন্যান্য কৃষি এবং খাদ্যদ্রব্য</option>";
		$source .= "<option value='299'>পোষা প্রাণী ও জীবজন্তু</option>";
		$source .= "<option value='300'>&nbsp;&nbsp;পোষা প্রাণী</option>";
		$source .= "<option value='307'>&nbsp;&nbsp;গবাদি পশু</option>";
		$source .= "<option value='310'>&nbsp;&nbsp;আনুষঙ্গিক জিনিসপত্র</option>";
		$source .= "<option value='313'>&nbsp;&nbsp;অন্যান্য পোষা প্রাণী ও জীবজন্তু</option>";
		$source .= "<option value='314'>অবসর, ক্রীড়া ও শখ</option>";
		$source .= "<option value='315'>&nbsp;&nbsp;ক্রীড়া ও বাইসাইকেল</option>";
		$source .= "<option value='325'>&nbsp;&nbsp;চলচ্চিত্র, সঙ্গীত ও সাহিত্য</option>";
		$source .= "<option value='331'>&nbsp;&nbsp;আর্টস ও সংগ্রহণীয়</option>";
		$source .= "<option value='332'>&nbsp;&nbsp;সঙ্গীত ও আনুষঙ্গিক সরঞ্জাম</option>";
		$source .= "<option value='341'>&nbsp;&nbsp;টিকেট</option>";
		$source .= "<option value='347'>&nbsp;&nbsp;অন্যান্য অবসর, ক্রীড়া ও শখ</option>";
		$source .= "<option value='348'>চাকরি</option>";
		$source .= "<option value='349'>&nbsp;&nbsp;চাকরীর বিজ্ঞাপন</option>";
		$source .= "<option value='375'>&nbsp;&nbsp;সার্ভিস</option>";
		$source .= "<option value='381'>শিক্ষা</option>";
		$source .= "<option value='382'>&nbsp;&nbsp;বইপত্র</option>";
		$source .= "<option value='385'>&nbsp;&nbsp;টিউশন</option>";
		$source .= "<option value='389'>&nbsp;&nbsp;অন্যান্য শিক্ষা</option>";
		$source .= "<option value='390'>অন্যান্য</option></select>";
		$source .= "</div><div class='location'>";
		$source .= "<select name='location'><option value=''>সারা বাংলাদেশ</option><optgroup label='শহর'><option value='1211'>ঢাকা</option>";
		$source .= "<option value='1295'>চট্টগ্রাম</option><option value='1346'>সিলেট</option></optgroup><optgroup label='বিভাগ'>";
		$source .= "<option value='1141'>ঢাকা বিভাগ</option><option value='1159'>চট্টগ্রামবিভাগ</option><option value='1170'>সিলেট বিভাগ</option>";
		$source .= "<option value='1174'>খুলনা বিভাগ</option><option value='1185'>রাজশাহী বিভাগ</option><option value='1194'>রংপুর বিভাগ</option>";
		$source .= "<option value='1204'>বরিশাল বিভাগ</option></optgroup></select>";
		$source .= "</div><div class='submit'>";
		$source .= "<button class='btn large search-btn' type='submit'>";
		$source .= "<span><i class='ico-search-btn'></i>খোজ</span></button></div></div>";
		$source .= "<div id='ad-types'>";
		$source .= "<label>";
		$source .= "<input checked='checked' id='type_id__6' name='type_id[]' type='radio' value='6' />";
		$source .= "<span>বিক্রয়</span>";
		$source .= "</label>";
		$source .= "<label>";
		$source .= "<input id='type_id__5' name='type_id[]' type='radio' value='5' />";
		$source .= "<span>আবশ্যক</span>";
		$source .= "</label>";
		$source .= "<label><input id='type_id__all' name='type_id[]' type='radio' value='all' />";
		$source .= "<span>সবকিছু</span>";
		$source .= "</label>";
		$source .= "</div>";
		$source .= "</form>";
		
		$source .= "<div class='row' id='serp'>";
		$source .= "<div class='col3' id='serp-nav'>";
		$source .= "<div class='inner-box-compact clearfix'>";
		$source .= "<div class='categories'>";
		$source .= "<ul class='flat tree'><li class='indent-0'><div class='current'>সকল  শ্রেণী</div>";
		$source .= "<ul class='flat tree links'>";
		$source .= "<li><a href='/bn/electronics-in-bangladesh'><span class='title'>ইলেকট্রনিকস্</span><span class='count'>&nbsp;176826</span>";        $source .= "</a></li><li>";
		$source .= "<a href='/bn/cars-vehicles-in-bangladesh'><span class='title'>গাড়ি ও অন্যান্য যানবাহন</span>";
		$source .= "<span class='count'>&nbsp;23154</span></a></li>";
		$source .= "<li><a href='/bn/property-in-bangladesh'><span class='title'>প্রপার্টি</span>";
		$source .= "<span class='count'>&nbsp;22335</span></a></li>";
		$source .= "<li><a href='/bn/personal-items-in-bangladesh'><span class='title'>ব্যক্তিগত সামগ্রী</span>";
		$source .= "<span class='count'>&nbsp;11332</span></a></li>";
		$source .= "<li><a href='/bn/education-in-bangladesh'><span class='title'>শিক্ষা</span>";
		$source .= "<span class='count'>&nbsp;10585</span></a></li>";
		$source .= "<li><a href='/bn/home-appliances-in-bangladesh'><span class='title'>ঘরের দ্রব্যসামগ্রী</span>";
		$source .= "<span class='count'>&nbsp;7638</span></a></li>";
		$source .= "<li class='hidden'><a href='/bn/jobs-in-bangladesh'><span class='title'>চাকরি</span>";
		$source .= "<span class='count'>&nbsp;6334</span></a></li>";
		$source .= "<li class='hidden'>";
		$source .= "<a href='/bn/leisure-sport-hobby-in-bangladesh'><span class='title'>অবসর, ক্রীড়া ও শখ</span>";
		$source .= "<span class='count'>&nbsp;5805</span></a></li>";
		$source .= "<li class='hidden'>";
		$source .= "<a href='/bn/pets-animals-in-bangladesh'><span class='title'>পোষা প্রাণী ও জীবজন্তু</span>";
		$source .= "<span class='count'>&nbsp;4378</span></a></li>";
		$source .= "<li class='hidden'>";
		$source .= "<a href='/bn/food-agriculture-in-bangladesh'><span class='title'> কৃষি এবং খাদ্যদ্রব্য</span>";
		$source .= "<span class='count'>&nbsp;852</span></a></li>";
		$source .= "<li class='hidden'>";
		$source .= "<a href='/bn/other-in-bangladesh'><span class='title'>অন্যান্য</span><span class='count'>&nbsp;461</span></a></li>";
		$source .= "</ul></li></ul></div><div class='locations'>";
		$source .= "<ul class='flat tree'><li class='indent-0'><div class='current'>সারা বাংলাদেশ</div>";
		$source .= "<ul class='flat tree links'>";
		$source .= "<li><a href='/bn/ads-in-dhaka'><span class='title'>ঢাকা</span>";
		$source .= "<span class='count'>&nbsp;157963</span></a></li>";
		$source .= "<li>";
		$source .= "<a href='/bn/ads-in-chittagong'><span class='title'>চট্টগ্রাম</span><span class='count'>&nbsp;33641</span></a></li>";
		$source .= "<li><a href='/bn/ads-in-dhaka-division'><span class='title'>ঢাকা বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;17988</span></a></li>";
		$source .= "<li><a href='/bn/ads-in-sylhet'><span class='title'>সিলেট</span>";
		$source .= "<span class='count'>&nbsp;13421</span>";
		$source .= "</a></li><li><a href='/bn/ads-in-khulna-division'><span class='title'>খুলনা বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;12785</span></a></li>";
		$source .= "<li>";
		$source .= "<a href='/bn/ads-in-rajshahi-division'><span class='title'>রাজশাহী বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;11080</span></a></li><li class='hidden'>";
		$source .= "<a href='/bn/ads-in-chittagong-division'><span class='title'>চট্টগ্রামবিভাগ</span>";
		$source .= "<span class='count'>&nbsp;9765</span></a></li><li class='hidden'>";
		$source .= "<a href='/bn/ads-in-rangpur-division'><span class='title'>রংপুর বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;6723</span></a></li><li class='hidden'>";
		$source .= "<a href='/bn/ads-in-barishal-division'><span class='title'>বরিশাল বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;3233</span></a></li><li class='hidden'>";
		$source .= "<a href='/bn/ads-in-sylhet-division'><span class='title'>সিলেট বিভাগ</span>";
		$source .= "<span class='count'>&nbsp;3101</span></a></li>";
		$source .= "</ul></li></ul></div></div></div>";
		
		$y=$this->pageNo*10;
		for($x=$y;$x<$y+10 && $x<$this->no;$x++)
		{
		  $source .= "<div class='col9' id='serp-content'>";
		  $source .= "<div id='item-nav-bar'>";
		  $source .= "<div class='tabs'>";
		  $source .= "<div class='h-stack' data-tabs='{'all':269700,'private':225632,'business':44068,'without_filter':269700}' id='scopes'>";
		  $source .= "<div class='current tab' data-sellertype='all'>";
		  $source .="<a href='http://www.w3schools.com/html/html_links.asp'>";
          $source .="<div class = 'adRow'>";
          $source .="<div class ='imgeAd'>";
		
	      $source .="<img src= '". $this->data[$x]['path'] . "' height='100px' width='100px'/>";
	      $source .="</div>";
	      $source .="<div class='adInfo'>";
	      $source .="<h1>".$this->data[$x]['title']."</h1>";
	      $source .=$this->data[$x]['date']."</br>";
	      $source .=$this->data[$x]['subLocation']; 
	      $source .="</div>";
          $source .=" </div>";
   	      $source .="</a>";
	  
	  
		 $source .= "</div></div></div></div></div>";
       }				
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
      public function Display()
	 {
	     return $this->getMainBody();
	 }
     
   }
?>




