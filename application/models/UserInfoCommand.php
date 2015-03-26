<?php
    include("Command.php");
    class UserInfoCommand extends CI_Model implements Command
	{    
	    private  $userData;
	    function UserInfoCommand()
		{
  			parent::__construct();
  			$this->load->helper('url');	
		    $this->load->database();
 		}
		function dataValue($data)
		{
		   $this->userData=array('Email'=>$data['email']);
		}

	    function execute()
		{
		   $query = $this->db->get_where('user', array('Email' => $this->userData['Email']));
           
		   
		   if($query->num_rows()> 0)
		   {
              		   $data=null;
		               $adNo=0;
				   foreach ($query->result() as $row)
				  {
					 $data[$adNo]['name']=$row->Name;
					 $data[$adNo]['email']=$row->Email;
					 $data[$adNo]['phone']=$row->Phone;
					 $data[$adNo]['password']=$row->Password;
					 $data[$adNo]['location']=$row->Location;
					 
					 $adNo++;
	     		 }
                return $data;			  
		
		   }
		   else
		   {
		      
			  return 2;
		   }
		   return 0;
		}
	}
?>