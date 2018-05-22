
<html>

<head>

<title>Administration</title>

<style>

body

{

font-family:Calibri;

}

</style>

</head>

<body>

<?php

 function Red($url, $permanent = false)
	{
    	if (headers_sent() === false)
    	{
        	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    	}

    	exit();
	}


if($position == "1")

{
?>

	
<h2>
	<?php Redirect('dashboard/sales'); ?>
	
	Hi <?php echo $persons->userName;?>, Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php
}

elseif($position == "2")

{
	
	

?>

<h2>
	<?php Redirect('dashboard/creative'); ?>
	
	Hi <?php echo $user->name;?>, Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php
}

elseif($position == "3")

{
	
	

?>

<h2>
	<?php Redirect('dashboard'); ?>
	
	Hi <?php echo $user->name;?>, Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php
}

elseif($position == "4")

{
	
	

?>

<h2>
	<?php Redirect('dashboard'); ?>
	
	Hi <?php echo $user->name;?>, Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php
}

elseif($position == "5")

{
	
	

?>

<h2>
	<?php Redirect('dashboard'); ?>
	
	Hi <?php echo $user->name;?>, Welcome to Login you as a Administrator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php


}
else

{

?>

<h2>Hi <?php echo $user->name;?>, Welcome to Login you as a Operator <?php echo anchor('login/logout', 'Logout');?></h2>

<?php

}

?></body>

</html>
