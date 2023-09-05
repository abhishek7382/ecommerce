<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "ecommerce");

    $query = "SELECT * FROM `users` WHERE email = '$email' ";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if($row){
        if($row['password'] == $password){
            $_SESSION["email"] = $email;
            $_SESSION["password"] =  $password;
            header("Location: user_info.php");
        }else{
            $_SESSION["password_fail"] = "Incorrect Password";
            header("Location: login.php");
        }
    }else{
        header("Location: login.php");
        $_SESSION["email_fail"] = "Incorrect Email";
    }
?>