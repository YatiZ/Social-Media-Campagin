<?php

include 'connection.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "Insert into `contact`(`username`,`email`,`message`) values(?,?,?)";

    if ($stmt = mysqli_prepare($con, $sql)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo "<div class=\"alert\" id=\"noti\">
            <h2>Success!</h2>
            <div>
              Your messages have been sent. Would you like to Go back to <a href=\"../Contact.php\">Contact</a>
            </div>
          </div>";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}
?>

<style>
    /* alert design */

.alert {
  padding: 20px;
  background: rgba(255, 255, 255, 0.15);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(18px);
  -webkit-backdrop-filter: blur(18px);
  border: 1px solid rgba(255, 255, 255, 0.18);
  border-radius: 1rem;
  background-color: #fff;
  z-index: 10;
  position: absolute;
  width: 400px;
  bottom: 40%;
  justify-content: center;
  align-items: center;
  left: 30%;
}

</style>
