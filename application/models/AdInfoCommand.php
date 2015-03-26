<?php
    include("Command.php");
    class AdInfoCommand extends CI_Model implements Command
	{    
	    private  $adData,$userData,$imageInfo;
	    function AdInfoCommand()
		{
  			parent::__construct();
  			$this->load->helper('url');	
		    $this->load->database();
 		}
        
	    function execute()
		{
		   $this->db->select('*');
           $this->db->from('ad');
           $this->db->join('image', 'image.ImageId = ad.ImageId');
           $query = $this->db->get();
          
		  
		   $baseUrl['base']		= $this->config->item('base_url');		   
		   $data=null;
		   $adNo=0;
           foreach ($query->result() as $row)
		  {
    		 $data[$adNo]['title']=$row->Title;
			 $data[$adNo]['catagory']=$row->Catagory;
			 $data[$adNo]['description']=$row->Description;
			 $data[$adNo]['price']=$row->Price;
			 $data[$adNo]['image']=$row->Image;
			 $data[$adNo]['subLocation']=$row->SubLocation;
			 $data[$adNo]['email']=$row->Email;
			 $data[$adNo]['date']=$row->Date;
			 
			 $data[$adNo]['path']=$baseUrl['base']."/".$row->Path;
             
			 $adNo++;
	      }
          return $data;
		}
	}
?>