<?php
    
    class Handler extends CI_Model
	{    
	    private  $userData;
	    function Handler()
		{
  			parent::__construct();
  			$this->load->helper('url');	
		    $this->load->database();
 		}
		function dataValue($data)
		{
		   $this->userData=array('Email'=>$data['email']);
		}

	    function matchUser($userData)
		{
		   $this->userData=array('Email'=>$userData['email']);
		   $query = $this->db->get_where('user', array('Email' => $this->userData['Email']));
           
		   
		   if($query->num_rows()> 0)
		   {
              		   $data=null;
		               $adNo=0;
				   foreach ($query->result() as $row)
				  {
					 $data[$adNo]['email']=$row->Email;
					 $data[$adNo]['password']=$row->Password; 
					 $adNo++;
	     		 }
                return $data;			  
		
		   }
		   else
		   {
		      echo "no such a user";
			  return 2;
		   }
		   return 0;
		}
	}
?>