<?php
  session_start();
  if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost", "root", "", "ecommerce");
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $qry);
    if($res->num_rows > 0 ){
      $_SESSION['user_mail_exist'] = $email ." email adress already exits";
      header("Location: registration.php");
    }else{
      // Query to insert data into database
      $query = "INSERT INTO `users`(`name`, `email`, `mobile_number`, `password`) VALUES ('$user_name', '$email', '$mobile_number','$password')";
      $result = mysqli_query($conn , $query);
      
      if($result){
        echo "Data inserted successfully";
      }else{
        echo "Data inserted not successfully";
      }  
    }
  }   

?>