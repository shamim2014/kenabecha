<?php
    class SingletonLogin extends CI_Controller
	{    
	    private static $instance=0;
	    private function SingletonLogin()
		{
 		}
		
        public static function getInstance()
		{
		   if(self::$instance==0)
		   {
		       self::$instance= new SingletonLogin;
		   }
		   return self::$instance; 
		}
		
		public function logIn($data)
		{
		    
		}
		public function logOut()
		{
		    self::$instance=0; 
		} 
		public function signUp($data)
		{
		    $this->load->model('UserInsertCommand');
			$obj= new UserInsertCommand;
            $obj->execute();
		}
		
	    
	}
?>