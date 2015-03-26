<?php
    class Project extends CI_Controller
	{
	     var  $obj;
		 var  $page;
		 var  $temp;
		 protected static $id=0;
	     function Project()
		 {
		    parent::__construct();
			$this->load->model('ProjectModel');
			$this->obj= new ProjectModel;
			
			$this->temp = $this->obj->general("HomeBody");
			$this->page=$this->temp['pageComposite'];
			self::$id=self::$id+1;
		 }
		 function home()
		 {	
		    $data=$this->temp;
			$this->load->view('show',$data);
			
			
 		 }
		 function allAdd()
		 {
		   $data = $this->obj->bodyDecorator("AllAd",$this->page);
		   
     		$this->load->view('show',$data);
		 }
		 function help()
		 {
		    $data = $this->obj->bodyDecorator("Help",$this->page);
     		$this->load->view('show',$data);
		 }
	     function login()
		 {
			$data = $this->obj->bodyDecorator("Login",$this->page);
     		$this->load->view('show',$data);
		 }
		 function signIn()
		 {
		 }
		 function userInfo()
		 {
		   
		   $data['password']="password";
		   $data['name']=$_POST["name"]; 
		   $data['email']=$_POST["email"];
		   $data['password_confirmation']=$_POST["password_confirmation"];
		   $data['location']='1170';
		   include('SingletonLogin.php');
		   $singleton = SingletonLogin::getInstance();
		   
		 }
		 function newAd()
		 {
		     $data = $this->obj->bodyDecorator("NewAd",$this->page);
			 $this->load->view('show',$data);
		 }
		 function insert()
		 {
		   $data['catagory']=$_POST["catagory"];
		   $data['title']=$_POST["title"];
		   
		   $data['description']=$_POST["description"];
		   $data['price']=$_POST["price"];
		   $data['image']=$this->input->post("file");
		   $data['id']=	self::$id;
		   $data['password']="password";
		   $data['name']=$_POST["poster_name"]; 
		   $data['email']=$_POST["email"];
		   $data['phone']=$_POST["phone_no"];
		   $data['location']=$_POST["location"];
		   $data['date']=date('Y-m-d H:i:s');
		   
		   $data['path'] ='Image/'. $_FILES['file']['name'];
		   
		   $this->load->model('InsertCommand');
		   $command= new InsertCommand;
			
		   $command->dataValue($data);
		   $ret=$command->execute();
		   
		   echo $ret;
			
		 }
		 function signUp()
		 {
		    $data = $this->obj->bodyDecorator("SignUp",$this->page);
     		$this->load->view('show',$data);
		  
		 }
		 
		 
	}
	
?>