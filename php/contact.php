<?php

	$name1=$_POST['name'];
	$subject1=$_POST['subject'];

	$to="imrankhanvloger@gmail.com";
	$subject="Name => ".$name1." Subject => ".$subject1;
	$from=$_POST['email'];
	$msg=$_POST['message'];
	
	
	mail($to,$subject,$msg,$from);
	
	echo "<h2>Message Send Successfuly!</h2>";

?>