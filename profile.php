<?php
session_start();
include "db.php";
$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
$row = mysqli_fetch_assoc($result);
?>
<h2>Profile</h2>
ID: <?php echo $row['user_id']; ?><br>
Name: <?php echo $row['name']; ?><br>
Email: <?php echo $row['email']; ?><br>
User Type: <?php echo $row['user_type']; ?><br>
<a href="<?php echo $_SESSION['user_type'] == 'Admin' ? 'admin_home.php' : 'user_home.php'; ?>">Go Home</a>
