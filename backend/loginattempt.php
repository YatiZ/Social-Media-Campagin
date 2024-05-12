
<!-- CSS -->
<style>
    /* alert design */
	.alert {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 255, 255, 0.15);
	box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
	backdrop-filter: blur(18px);
	-webkit-backdrop-filter: blur(18px);
	border: 1px solid rgba(255, 255, 255, 0.18);
	border-radius: 1rem;
	background-color: #fff;
    padding: 20px;
    z-index: 9999; 
}

.closebtn {
  margin-left: 15px;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}
</style>

<!-- JavaScript -->
<script>
// JavaScript function to close the alert and redirect to login page
function closeAlert() {
    document.getElementById("noti").style.display = "none";
    window.location = "/auth/LoginPage.html";
}
</script>

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
        echo "<div class=\"alert\" id=\"noti\">
        <h2>Success!</h2>
        <div>
		You've successfully logged in. Nice to have you back!
      </div>";
	  echo "<script>
                setTimeout(function() {
                    window.location.href = '../Home.php'; 
                }, 2000); 
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
        echo "<div class=\"alert\" id=\"noti\">
        <span class=\"closebtn\" onclick=\"closeAlert()\">&times;</span>
        <h2>Invalid Username or Password</h2>
        <div>
          Don't have an account? Please <a href=\"/auth/RegisterPage.html\">Sign Up</a>
        </div>
      </div>";
        exit();
    }
}
?>


