<?php 
class Login extends Body
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
		$source .="<p class='toggle-context'>এখনো কোনো অ্যাকাউন্ট নেই আপনার?<a href='signUp'>এখনই সাইন আপ করুন!</a></p></div>";
		$source .="<div class='col5 polar'>";
		$source .="<div class='tabs'>";
		$source .="<a class='active tab' href='login'>লগ ইন</a>";
		$source .="<a class='tab' href='signUp'>সাইন আপ</a></div>";
		$source .="<div class='form-box'><div class='inner-box clearfix'>";
		$source .="<div class='fieldset' id='login-fields'>";
		$source .="<form accept-charset='UTF-8' action='signIn' class='new_user' id='new_user' method='post'>";
		$source .="<div style='margin:0;padding:0;display:inline'>";
		$source .="<input name='utf8' type='hidden' value='&#x2713;' />";
		$source .="<input name='authenticity_token'type='hidden' value='/uQimFX4SUENprFbpXAMYKnA4L5Cuyd+VFmiiZnvNQY=' /></div>";
		$source .="<input id='user_site_id' name='user[site_id]' type='hidden' value='2' />";
		$source .="<div class='field'>";
		$source .="<div class='input prepend'>";
		$source .="<span class='add-on xl'><i class='ico-email'></i>";
		$source .="</span><input class='required xl' id='user_email' name='email' placeholder='ইমেইল' size='30' type='text' value='' />";
		$source .="</div></div><div class='field'><div class='input prepend'>";
		$source .="<span class='add-on xl'>";
		$source .="<i class='ico-password'></i>";
		$source .="</span><input class='required xl' id='user_password' name='password' placeholder='পাসওয়ার্ড' size='30' type='password' />";
		$source .="</div></div><div class='field'><div class='input'><label>";
		$source .="<input name='user[remember_me]' type='hidden' value='0' />";
		$source .="<input id='user_remember_me' name='user[remember_me]' type='checkbox' value='1' />আমাকে লগইন রাখুন</label>";
		$source .="<button class='btn polar'>";
		$source .="<a href='signIn?pagename=signIn'><span>লগ ইন</span></a></button></div></div></form></div></div></div></div></div></div></div></div></div>";
		
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


