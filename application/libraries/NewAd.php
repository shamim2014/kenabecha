
<?php 
       class NewAd extends Body
	   {
	     function getMainBody()
		 {
             $source="<div class='NewAd_Page'>";
		     $source .="<div class='NewAd_prograbar'>";
		     $source .="<i>তথ্য পূরণ</i>";
		     $source .="</div>";
			 $source .="<form novalidate='novalidate' accept-charset='UTF-8' action='insert'  enctype='multipart/form-data' id='ads-form'  			 						method='post'>";
			 $source .="<div class ='NewAd_Info'>";
			 $source .="<div class='Ad_row'>";
			 $source .="<div class='label'><label for='ad_category_id'>শ্রেণী</label></div>";
			 $source .="<div class='NewAd_input' id='ad-categories'>";
	         $source .="<select class='novalidate' name='catagory' autocomplete='off' id='category-level-0'>";
			 $source .="<option value=''>একটি শ্রেণী নির্বাচন করুন...</option><optgroup label='গাড়ি ও&nbsp;অন্যান্য যানবাহন'><option value='193'>গাড়ি</option>";
			 $source .="<option value='194'>পার্টস ও&nbsp;এক্সেসরিজ</option>";
			 $source .="<option value='203'>মটরবাইক্ ও স্কুটার</option>";
			 $source .="<option value='204'>ট্রাক ও ভ্যান</option>";
			 $source .="<option value='602'>বাইসাইকেল</option>";
			 $source .="<option value='205'>অন্যান্য যানবাহন</option></optgroup><optgroup label='প্রপার্টি'><option value='211'>এপার্টমেন্ট/ফ্ল্যাট</option>";
			 $source .="<option value='212'>বাড়ি</option>";
			 $source .="<option value='213'>গ্যারেজ</option>";
			 $source .="<option value='214'>রুম ও সাবলেট</option>";
			 $source .="<option value='218'>প্লট/জমি</option>";
			 $source .="<option value='223'>কমার্শিয়াল স্পেস</option>";
			 $source .="<option value='228'>অন্যান্য&nbsp;প্রপার্টি</option></optgroup><optgroup label='ইলেকট্রনিকস্'><option value='230'>মোবাইল ফোন</option>";
			 $source .="<option value='231'>মোবাইল ফোন&nbsp;এক্সেসরিজ</option>";
			 $source .="<option value='893'>কম্পিউটার এবং এ্যক্সেসরিজ</option>";
			 $source .="<option value='850'>টিভি ও ভিডিও</option>";
			 $source .="<option value='855'>ক্যামেরা ও ক্যামকরডার</option>";
			 $source .="<option value='846'>অডিও এবং এমপিথ্রি</option>";
			 $source .="<option value='242'>ভিডিও গেম ও কনসোল</option>";
			 $source .="<option value='244'>অন্যান্য&nbsp;ইলেকট্রনিকস্</option></optgroup><optgroup label='ঘরের&nbsp;দ্রব্যসামগ্রী'>";
			 $source .="<option value='246'>আসবাবপত্র</option>";
			 $source .="<option value='256'>ঘর ও বাগান</option>";
			 $source .="<option value='263'>কিচেন&nbsp;ও&nbsp;আনুষঙ্গিক</option>";
			 $source .="<option value='579'>অন্যান্য ঘর সামগ্রী</option></optgroup>";
			 $source .="<optgroup label='ব্যক্তিগত সামগ্রী'><option value='274'>জামা,&nbsp;জুতো&nbsp;এবং&nbsp;আনুষাঙ্গিক</option>";
			 $source .="<option value='282'>বাচ্চাদের&nbsp;জামাকাপড় ও খেলনা </option>";
			 $source .="<option value='288'>স্বাস্থ্য&nbsp;ও&nbsp;সৌন্দর্য</option>";
			 $source .="<option value='294'>হস্তশিল্প</option>";
			 $source .="<option value='298'>অন্যান্য&nbsp;ব্যক্তিগত সামগ্রী</option></optgroup>";
			 $source .="<optgroup label=' কৃষি এবং খাদ্যদ্রব্য'><option value='595'>ফলমূল</option>";
			 $source .="<option value='596'>শাকসবজি</option>";
			 $source .="<option value='597'>মাছ</option>";
			 $source .="<option value='598'>মাংস</option>";
			 $source .="<option value='599'>ফসল, বীজ এবং গাছ-গাছালি </option>";
			 $source .="<option value='600'>অন্যান্য কৃষি এবং খাদ্যদ্রব্য</option></optgroup>";
			 $source .="<optgroup label='পোষা প্রাণী&nbsp;ও জীবজন্তু'><option value='300'>পোষা প্রাণী</option>";
			 $source .="<option value='307'>গবাদি পশু</option>";
			 $source .="<option value='310'>আনুষঙ্গিক&nbsp;জিনিসপত্র</option>";
			 $source .="<option value='313'>অন্যান্য&nbsp;পোষা প্রাণী&nbsp;ও জীবজন্তু</option></optgroup>";
			 $source .="<optgroup label='অবসর,&nbsp;ক্রীড়া&nbsp;ও&nbsp;শখ'><option value='315'>ক্রীড়া&nbsp;ও বাইসাইকেল</option>";
			 $source .="<option value='325'>চলচ্চিত্র,&nbsp;সঙ্গীত&nbsp;ও&nbsp;সাহিত্য</option>";
			 $source .="<option value='331'>আর্টস&nbsp;ও&nbsp;সংগ্রহণীয়</option>";
			 $source .="<option value='332'>সঙ্গীত&nbsp;ও&nbsp;আনুষঙ্গিক&nbsp;সরঞ্জাম</option>";
			 $source .="<option value='341'>টিকেট</option>";
			 $source .="<option value='347'>অন্যান্য&nbsp;অবসর,&nbsp;ক্রীড়া&nbsp;ও&nbsp;শখ</option></optgroup>";
			 $source .="<optgroup label='চাকরি'><option value='349'>চাকরীর বিজ্ঞাপন</option>";
			 $source .="<option value='375'>সার্ভিস</option></optgroup><optgroup label='শিক্ষা'><option value='382'>বইপত্র</option>";
			 $source .="<option value='385'>টিউশন</option>";
			 $source .="<option value='389'>অন্যান্য শিক্ষা</option></optgroup><option value='390'>অন্যান্য</option>";
			 $source .="</select>";
			 $source .=" </div>";
			 $source .="</div>";
			 $source .="<div class='Ad_row'>";
			 $source .="<div class='label'><label for='ad_title'>বিজ্ঞাপন শিরোনাম</label></div>";
             $source .="<div class='NewAd_input' id='ad_title'>";
			 $source .="<input class='required' id='ad_title' maxlength='40' name='title' size='40' type='text'>";
             $source .="<div class='feedback'>ছোট এবং সহজ রাখুন - কিন্তু কোনো মুল্য নয়</div>";
			 $source .="</div></div>";
			 $source .="<div class='Ad_row'>";
		     $source .="<div class='label'><label class='required' for='ad_description'>বর্ণনা</label></div>";
	         $source .="<div class='NewAd_input'>";
             $source .="<textarea class='required countdown' cols='60' id='ad_description' maxlength='5000' name='description' rows='8'></textarea>";
             $source .="<div class='feedback'>যত ভালো বর্ণনা তত বেশি বিক্রয়ের সম্ভাবনা। বিজ্ঞাপিত আইটেমটির বৈশিষ্ট্য, আকার-আকৃতি, অবস্থা, সাথে কি কি অন্তর্ভুক্ত ইত্যাদির বর্ণনা দিন।</div><span style='display: none;' class='countdown'><span></span>&nbsp;টি অক্ষর বাকি</span></div></div>";
	   
            $source .="<div class='Ad_text'>";
		    $source .="<div class='label_text'><label for='ad_price'>মূল্য</label></div>";
            $source .="<div class='NewAd_text'>";
            $source .="<span class='add-on'>৳</span>";
			$source .="<input class='ascii' id='ad_price' name='price' size='20' type='text'>";
            $source .="<div class='feedback'>সঠিক দাম চয়ন করুন। যেকোনো কিছুই বিক্রয়সাধ্য যদি দামটা ঠিক থাকে।</div></div></div>";
	        $source .="<div class='Ad_row'>";
	        $source .="<div class='row field images' id='image-upload'>";
            $source .="<div class='label'><label>ছবি আপলোড করুন</label></div>";
            $source .="<div class='input col'>";
            $source .="<div class='input clearfix h-stack'>";
            $source .="<div class='uploaded-images h-stack'></div>";
            $source .="<div class='upload-box'>";
			$source .="<div class='input-container'>";
			$source .="<input id='file' name='file' type='file'>";
			$source .="</div>";
            $source .="<label style='display: none;' class='default-image-label'><span class='translation_missing' title='translation missing:           bn.ads.form.image_upload.default_image_label'>Default Image Label</span></label>";
           $source .="<div class='feedback show'>ছবিটি অবশ্যই হয় JPG, GIF অথবা PNG হতে হবে</div>";
           $source .="</div>";
           $source .="</div>";
           $source .="</div>";
           $source .="</div>";
           $source .="</div>";
   
           $source .="<div class ='legend'>আপনার সম্বন্ধে</div>";
   
           $source .="<div class='Ad_row_user'>";
		   $source .="<div class='label'><label for='ad_poster_name'>নাম</label></div>";
           $source .="<div class='NewAd_input' id='ad_poster_name'>";
		   $source .="<input class='required' id='ad_poster_name' maxlength='60' name='poster_name' size='30' type='text' /></div>";
	       $source .="</div>";
           $source .="<div class='Ad_row'>";
		   $source .="<div class='label'><label for='ad_email'>ইমেইল</label></div>";
           $source .="<div class='NewAd_input' id='ad_email'>";
		   $source .="<input class='required email ascii' id='ad_email' name='email' size='30' type='text'/></div></div>";	
		   $source .="<div class='Ad_row'>";
		   $source .="<div class='label'><label for='ad_phone_no'>ফোন নম্বর</label></div>";
           $source .="<div class='NewAd_input' id='ad_phone_no'>";
		   $source .="<input class='phone required ascii' id='ad_phone_no' maxlength='60' name='phone_no' size='30' type='text' />";           $source .="</div></div>";
	       $source .="<div class='Ad_row'>";
		   $source .="<div class='label'><label for='ad_location_id'>অবস্থান</label></div>";
		   $source .="<div class='NewAd_input' id='ad_location_id'>";
	       $source .="<select id='location-level-0' name='location'>";
		   $source .="<option value='একটি স্থান নির্বাচন করুন...'>একটি স্থান নির্বাচন করুন...</option>";
		   $source .="<option value=''>----</option>";
		   $source .="<option value='1211'>ঢাকা</option>";
		   $source .="<option value='1295'>চট্টগ্রাম</option>";
		   $source .="<option value='1346'>সিলেট</option>";
		   $source .="<option value=''>----</option>";
		   $source .="<option value='1141'>ঢাকা বিভাগ</option>";
		   $source .="<option value='1159'>চট্টগ্রামবিভাগ</option>";
		   $source .="<option value=''>--</option>";
		   $source .="<option value='1170'>সিলেট বিভাগ</option>";
		   $source .="<option value='1174'>খুলনা বিভাগ</option>";
		   $source .="<option value='1185'>রাজশাহী বিভাগ</option>";
		   $source .="<option value='1194'>রংপুর বিভাগ</option>";
		   $source .="<option value='1204'>বরিশাল বিভাগ</option>";
		   $source .="</select>";
		   $source .="</div>";
	       $source .="</div>";
	       $source .="</div>";
	       $source .="<div class ='subButton'><button class ='submit' type='submit'><span>অনুমোদন</span></button></div>";
		   		   
           $source .="</form>";	
           $source .="</div>";
	      
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

