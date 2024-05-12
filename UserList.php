<?php
// Include database connection file
include_once "backend/config.php";

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

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Home.php">Home</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item active">
              <a class="nav-link" href="/UserList.php">User Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/ContactList.php">Contact Lists</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/SocialMediaApps.php"
                >SocialMediaApps</a
              >
            </li>
            
          </ul>
          <div class="d-flex justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
              <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']): ?>
        <a href="/Newsletter.html">
        <a href="/backend/logout.php">Logout</a>
        </a>
      <?php else: ?>
        <a href="/auth/LoginPage.html"><i class="fa-solid fa-right-to-bracket"></i></a>
      <?php endif; ?>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
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

</body>
</html>

<?php
// Close database connection
$con->close();
?>