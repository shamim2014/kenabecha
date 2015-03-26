<?php
      include("BodyCreator.php");
	  include("Body.php");
	  include("HomeBody.php");
	  include("AllAd.php");
	  include("Login.php");
	  include("SignUp.php");
	  include("Help.php");
	  include("NewAd.php");
	  
      class ConcreateBodyCreator extends BodyCreator
	  {
	     function factoryMethod($bodyType)
		 {
		    if(strcmp($bodyType,"HomeBody")==0)
			        return new HomeBody;
			else if(strcmp($bodyType,"AllAd")==0)
			        return new AllAd;
			else if(strcmp($bodyType,"Help")==0)
			        return new Help;
			else if(strcmp($bodyType,"Login")==0)
			        return new Login;
			else if(strcmp($bodyType,"SignUp")==0)
			        return new SignUp;
			else if(strcmp($bodyType,"NewAd")==0)
			        return new NewAd;
			
		 }
	  }
	 
       
?>