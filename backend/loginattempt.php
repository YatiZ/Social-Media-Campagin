<?php 
include "config.php";

if(isset($_SESSION['error']))
	{
		$count=$_SESSION['error'];
		if ($count==3)
		{
			echo "<script>
					alert('3 Wrong Attempt: Please wait and try again');
					location.assign('LoginTimer.php');
				</script>";
		}
	}

if (isset($_POST['btn_submit'])) 
{
	$Email=$_POST['email'];
	$password=$_POST['password'];


	$select="SELECT * 
			FROM user_info
			WHERE email='$Email' 
			AND password ='$password'
			";
	$query=mysqli_query($con,$select);
    $count=mysqli_num_rows($query);

	if ($count>0) 
	{
		$data=mysqli_fetch_array($query);
		$UserID=$data['id'];
        
		// Set session variable to indicate user is logged in
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $UserID;

     
		// ------------------------------------------
		echo "<script>
		window.alert('Login Successful. Ckick Ok to return home page');
		window.location='../Home.php';
		</script>";
		exit();

	}


	 else 
	{
		if (isset($_SESSION['error'])) 
			{
				$_SESSION['error']++;

			}
			else
			{
				$_SESSION['error']=1;
			}
		echo "<script>
		window.alert('Invalid Username or password');
		window.location='login.php';
		</script>";
        exit();
	}
}
?>
