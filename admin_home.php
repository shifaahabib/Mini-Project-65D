<?php
session_start();
if ($_SESSION['user_type'] != "Admin") {
    header("Location: login.html");
    exit;
}
?>
<h2>Welcome <?php echo $_SESSION['name']; ?>!</h2>
<a href="profile.php">Profile</a><br>
<a href="change_password.php">Change Password</a><br>
<a href="view_users.php">View Users</a><br>
<a href="logout.php">Logout</a>
