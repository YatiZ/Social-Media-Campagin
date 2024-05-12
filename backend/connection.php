<?php
	// Enter your Host, username, password, database below.
	$con = mysqli_connect('localhost','root','','DW-DB') or die("connection failed : ".mysqli_connect_error());
	
	// if($con)
	// {
	// 	echo "Connection successfully";
	// }
	// else
	// {
	// 	echo "Sorry some mistake is";
	// }
	
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>