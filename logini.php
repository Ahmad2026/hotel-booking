<?php
include "config.php";
if (isset($_POST['submit'])) {
    $mailuid = mysqli_real_escape_string($conn, $_POST['mailuid']);
    $password =  $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("Location: login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users1 WHERE username='{$mailuid}' or email='{$mailuid}'";
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['password']);
            if ($pwdCheck == false) {
                header("Location: login.php?error=wrong password");
                exit();
            } else if ($pwdCheck == true) {
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                header("location: index.php?login=success");
            }
        } else {
            header("Location: login.php?error=nouser");
        }
    }
}
