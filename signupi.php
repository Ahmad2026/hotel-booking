<?php
if(isset($_POST['submit'])){
    include "config.php";
    $username = mysqli_real_escape_string($conn,$_POST['uid']);
    $email = mysqli_real_escape_string($conn,$_POST['mail']);
    $password = mysqli_real_escape_string($conn,$_POST['pwd']);
    $passwordRepeat = mysqli_real_escape_string($conn,$_POST['pwd-repeat']);
    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
            header("Location: signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
    }
    else if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9*$/]",$username) ) {
            header("Location: signup.php?error=invalidmailuid");
            exit();
    }

    elseif  (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            header("Location: signup.php?error=invalidmail&uid=".$username);
            exit();
    }
    // elseif  (!preg_match("/^[a-zA-z0-9*$/]",$username)) {
    //         header("Location: signup.php?error=invaliduid&mail=".$email);
    //         exit();
    // }
    else if($password != $passwordRepeat){
            header("Location: signup.php?error=passwordcheckmail=".$email."uid=".$username);
            exit();
    }
    else{
    $sql = "SELECT username FROM users1 WHERE username ='{$username}'";
       $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0) {
                header("Location: signup.php?error=usertaken&email=".$email);
            exit();
            }
            else{
                $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
                 $sql = "INSERT INTO users1 (username, email, password) VALUES ('{$username}','{$email}','{$hashedPwd}')";
                         mysqli_query($conn,$sql);
                         header("Location: signup.php?signup=success");
                         exit();
                 
            }
        }
    }
   

?>