<?php
// Include database connection file
include_once "config.php";

// Fetch data from the database
$sql = "SELECT id, username, email FROM user_info";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/admin.css" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
    src="https://kit.fontawesome.com/9dca7ae98e.js"
    crossorigin="anonymous"
  ></script>
    <title>User List</title>
</head>
<body>
<div class="admin-container mt-3">
      <h2>Admin DashBoard</h2>
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-1">User Id</div>
          <div class="col col-2">User Name</div>
          <div class="col col-3">Email</div>
        </li>

        <?php
        // Check if there are rows returned from the query
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<li>";
                echo "<div class='col col-1'>" . $row["id"] . "</div>";
                echo "<div class='col col-2'>" . $row["username"] . "</div>";
                echo "<div class='col col-3'>" . $row["email"] . "</div>";
                echo "</li>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found</td></tr>";
        }
        ?>
      </ul>
    </div>
    <div class="mx-10">
        <a href="/Home.php">Home</a>
        <a href="/auth/LoginPage.html">LogIn</a>
    </div>
</body>
</html>

<?php
// Close database connection
$con->close();
?>
