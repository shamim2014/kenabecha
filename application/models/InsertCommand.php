<?php
    include("Command.php");
    class InsertCommand extends CI_Model implements Command
	{    
	    private  $adData,$userData,$imageInfo;
	    function InsertCommand()
		{
  			parent::__construct();
  			$this->load->helper('url');	
		    $this->load->database();
 		}
		function dataValue($data)
		{
		   $this->adData=array('Title'=>$data['title'],'Catagory'=>$data['catagory'],'Description'=>$data['description'],'Price'=>$data['price'],           'SubLocation'=>$data['location'],'Email'=>$data['email'],'Date'=>$data['date']);
		   
		   $this->userData=array('Name'=>$data['name'],'Email'=>$data['email'],'Phone'=>$data['phone'],'Password'=>$data['password'],'Location'=>             $data['location']);
		   $this->imageInfo=array('Image'=>$data['image'],'Path'=>$data['path']);
		}

	    function execute()
		{
		   $query = $this->db->get_where('user', array('Email' => $this->userData['Email']));
           
		   
		   if($query->num_rows()> 0)
		   {
		      $this->db->insert('ad',$this->adData);
			  $this->db->insert('image',$this->imageInfo);
			  
			  return 1;
		   }
		   else
		   {
		      $this->db->insert('user',$this->userData);
		      $this->db->insert('ad',$this->adData);
			  $this->db->insert('image',$this->imageInfo);
			  return 2;
		   }
		   return 0;
		}
	}
?>