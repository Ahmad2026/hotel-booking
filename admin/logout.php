<?php
// echo $_SESSION["user_id"];
session_start();
session_unset();
session_destroy();
// echo "hi";
header("Location: login.php");
?>