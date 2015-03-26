<?php
    class ConcreateDecorator implements Decorator
	{
	    decorateBody(AbstractBuilder $page)
		{
	       include("ConcreatePageBody.php");
		   $factoryMethod= new ConcreatePageBody;
	       $this->mainbody= $factoryMethod->abstractMethod($bodyType);
		}
	}
?>