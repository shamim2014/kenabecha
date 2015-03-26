<?php
   class ProjectModel extends CI_Model
{
    var $pageComposite;	
	
 	function ProjectModel()
	{
  		parent::__construct();
  		$this->load->helper('url');	
		
 	}
	function general($bodyType)
	{
	    $this->load->library('ConcreatePageBuilder');
		$builder = new ConcreatePageBuilder;
		$builder->mainHeader();
		
		$builder->mainBody($bodyType);
		$builder->itemBox();
		$builder->mainFooter();
		$this->pageComposite= $builder->getPage();
	    
		$data['pageComposite']=$this->pageComposite;
		$data['page']       =$this->pageComposite->display();
		
		
		$data['base']		= $this->config->item('base_url');
		$data['css1']		= $this->config->item('css');
		
		$data['css']		= $this->config->item('css4');
		
		return $data;	
   }
   function dbLink($data)
   {
        echo $data['name'];
        echo $data['email'];	 
	
   }
   
   function bodyDecorator($bodyType,$pageComposite)
   {
        
        $this->load->library('ConcreateDecorator');
		$decorator = new ConcreateDecorator();
		$decorator->ConstructDecorator($pageComposite);
		
		$this->load->library('ConcreateBodyCreator');
		$bodyCreator = new ConcreateBodyCreator;
		
		$pageBody= $bodyCreator->factoryMethod($bodyType);
		
		 if(strcmp($bodyType,"AllAd")==0)
		 {
		    $this->load->model('AdInfoCommand');
		    $command = new AdInfoCommand;
			$allAd=$command->execute();
		    $pageBody->setAd($allAd,0);
		 }
		$data['page'] =$decorator->bodyDecorate($pageBody);
		
		$data['base']		= $this->config->item('base_url');
		$data['css1']		= $this->config->item('css');
		if(strcmp($bodyType,"Login")==0)
		   $data['css']		= $this->config->item('css2');
		else if(strcmp($bodyType,"SignUp")==0)
		   $data['css']		= $this->config->item('css2');
		else if(strcmp($bodyType,"NewAd")==0)
		        $data['css']		= $this->config->item('css3');
		else if(strcmp($bodyType,"HomeBody")==0)
		        $data['css']		= $this->config->item('css4');
		else if(strcmp($bodyType,"AllAd")==0)
		        $data['css']		= $this->config->item('css5');
		else if(strcmp($bodyType,"Help")==0)
		        $data['css']		= $this->config->item('css6');

		return $data;
   }

}

?>