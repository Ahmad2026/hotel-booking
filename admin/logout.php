<?php
// echo $_SESSION["user_id"];
session_start();
unset($_SESSION['admin_id']);
// session_destroy();
// echo "hi";
if (!isset($_SESSION['admin_id']))
    header("Location: login.php");
