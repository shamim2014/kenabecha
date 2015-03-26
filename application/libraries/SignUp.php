<?php 
class SignUp extends Body
{ 
           function getMainBody()
		  {
 	           $source ="<div class='login_page'>";
		       $source .="<div class='wrap'>";
			   $source .="<div class='inner-box'>";
			   $source .="<div class='row'>";
			   $source .="<div class='col6'>";
			   $source .="<h2 style='font-size:20px'>এক জায়গায় সব বিজ্ঞাপন পরিচালনা করুন - সম্পূর্ণ ফ্রি!</h2>";
	     $source .="<p > <img src='http://localhost/codeigniter/Image/book.png' alt='বিজ্ঞাপন দেখুন, এডিট কিংবা ডিলিট করুন' /> 'বিজ্ঞাপন দেখুন, এডিট কিংবা ডিলিট করুন'</p>";
			   
		$source .="<p> <img src='http://localhost/codeigniter/Image/clock.png' alt='নতুন বিজ্ঞাপন দিতে সময় বাঁচাতে আপনার যোগাযোগের বিবরণ সংরক্ষণ করুন' />'নতুন বিজ্ঞাপন দিতে সময় বাঁচাতে আপনার যোগাযোগের বিবরণ সংরক্ষণ করুন'</p>";
		$source .="<p> <img src='http://localhost/codeigniter/Image/search.png' alt='আপনার প্রিয় বিজ্ঞাপনগুলির প্রতি নজর রাখুন'/>আপনার প্রিয় বিজ্ঞাপনগুলির প্রতি নজর রাখুন</p>";
		$source .="<p class='toggle-context'>এখনো কোনো অ্যাকাউন্ট নেই আপনার?<a href='login'>এখানে লগইন করুন</a></p></div>";
		$source .="<div class='col5 polar'>";
		$source .="<div class='tabs'>";
		$source .="<a class='active tab' href='login'>লগ ইন</a>";
		$source .="<a class='tab' href='signUp'>সাইন আপ</a></div>";
		$source .="<div class='form-box'><div class='inner-box clearfix'>";
		$source .="<div class='fieldset' id='login-fields'>";
		$source .="<form accept-charset='UTF-8' action='userInfo' class='new_user' id='new_user' method='post'>";
		$source .="<div style='margin:0;padding:0;display:inline'>";
		$source .="<input name='utf8' type='hidden' value='&#x2713;' />";
		$source .="<input name='authenticity_token'type='hidden' value='/uQimFX4SUENprFbpXAMYKnA4L5Cuyd+VFmiiZnvNQY=' /></div>";
		$source .="<input id='user_site_id' name='user[site_id]' type='hidden'value='2' />";
		$source .="<div class='field'>";
		$source .="<div class='input'>";
		$source .="<input class='required xl' id='user_name' name='name' placeholder= 'নাম'size='30' type='text' /></div></div>";
		$source .="<div class='field'>";
		$source .="<div class='input'>";
		$source .="<input class='required email xl' id='user_email' name='email' placeholder='ইমেইল 'size='30' type='text' /></div></div>";
		$source .="<div class='field'>";
		$source .="<div class='input'>";
	   $source .="<input class='required xl' id='user_password' minlength='5' name='password' placeholder='পাওয়ার্ড 'size='30' type='password' />";
		$source .="</div></div>";
		$source .="<div class='field'>";
		$source .="<div class='input'>";
		$source .="<input class='required xl' id='user_password_confirmation' name='password_confirmation' placeholder='পাসওয়ার্ড নিশ্চিত করুন 'size='30' type='password' /></div></div>";
		$source .="<div class='field'>";
		$source .="<div class='terms'>অ্যাকাউন্টের জন্য সাইন আপ করে আপনি আমাদের <a href='Help'>শর্তাবলী এবং নীতিমালা</a> এর সাথে সম্মত হলেন</div>";
		$source .="<button class='btn polar'><span>সাইন আপ</span></button></div></form></div></div></div></div></div></div></div></div>";
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


