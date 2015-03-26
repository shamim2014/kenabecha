<!DOCTYPE html>
<html>
<head>

<meta charset='utf-8'/>
<link rel="stylesheet" type="text/css" href="h.css">
<title>
	কেনাবেচা করুন সহজেই বাংলাদেশে - canabaca.com
</title>

	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body style="background-image:url(Image/back.jpg)">
	<div>
	<?php
		include('header.php');
	?>
	</div>
	
	<div>
		<?php 
	if(isset($_GET['pagename']))
	{
		if($_GET['pagename']=='home')
		{
			echo "This is home page";
		}
		else if($_GET['pagename']=='alladd')
		{
			
			include('AllAdd.php');
		}
		else if($_GET['pagename']=='help')
		{
			include('Help.php');
		}
		else if($_GET['pagename']=='login')
		{
			include('Login.php');
		}
		else if($_GET['pagename']=='newadd')
		{
			include('Newadd.php');
		}
	}
	else
		include('body.php');
?>
	</div>
	
	<div>
		<?php
			include('item_box.php');
		?>
	</div>
	
	
	<div>
		<?php
			include('footer.php');
		?>
	</div>
	
</body>
</html>

