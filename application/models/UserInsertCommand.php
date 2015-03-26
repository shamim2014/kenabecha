<?php
    include("Command.php");
    class UserInsertCommand extends CI_Model implements Command
	{    
	    private  $userData;
	    function UserInsertCommand()
		{
  			parent::__construct();
  			$this->load->helper('url');	
		    $this->load->database();
 		}
		function dataValue($data)
		{
		   $this->userData=array('Name'=>$data['name'],'Email'=>$data['email'],'Phone'=>$data['phone'],'Password'=>$data['password'],'Location'=>             $data['location']);
		}

	    function execute()
		{   
		    $query = $this->db->get_where('user', array('Email' => $this->userData['Email']));
			
			if($query->num_rows()> 0)
		   {  
			  return 1;
		   }
		   else
		   {
		      $this->db->insert('user',$this->userData);
		   }
		}
	}
?>