<?php

  include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $un = $_POST['un'];
    $e = $_POST['e'];
    $pw = $_POST['pw'];

    echo "Your Name is $un <br/>";
    echo "Your Email is $e <br/>";

    $sql1 = "Insert into `user_info`(`username`,`email`,`password`) values('$un','$e','$pw')";
     
    $data = mysqli_query($con,$sql1);

    if($data)
		{
			header('location:/auth/LoginPage.html');
		}
		else
		{
			echo "Sorry!!!! Data insert error!!!!";
		}

} else {
    // Handle GET requests (redirect or display an error message)
    echo "This page only accepts POST requests.";
}
?>
