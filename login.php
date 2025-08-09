<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $pass = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id='$user_id'");
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['user_type'] = $row['user_type'];

        if ($row['user_type'] == "Admin") {
            header("Location: admin_home.php");
        } else {
            header("Location: user_home.php");
        }
    } else {
        echo "Invalid login credentials!";
    }
}
?>
