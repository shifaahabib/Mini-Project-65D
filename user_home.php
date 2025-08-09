<?php
session_start();
if ($_SESSION['user_type'] != "User") {
    header("Location: login.html");
    exit;
}
?>
<h2>Welcome <?php echo $_SESSION['name']; ?>!</h2>
<a href="profile.php">Profile</a><br>
<a href="change_password.php">Change Password</a><br>
<a href="logout.php">Logout</a>
