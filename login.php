<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body style="background-color:#3399ff"> 

    <?php
        include('navbar.php');
        // include('animation.php');
          if(!isset($_SESSION["email_fail"])){
            $email_message = "We'll never share your email with anyone else.";
          }else{
            $email_message = "<span class='text-danger'>Email does not exits in our record</span>";
          }
          if(!isset($_SESSION["password_fail"])){
            $password_message = "";
          }else{
            $password_message = "<span class='text-danger'>Password does not match :( </span>";
          }
    ?>

  <div class="container">
   <div class="row mt-5">
   <div class="col-md-3"></div>
   <div class="col-md-6 ..bg-info p-5">

        <form method="post" action="verify_login.php">
            <h1 class="text-center text-light fw-bold">Welcome!</h1>
            <h3 class="text-center fw-semibold">Login</h3>
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter your email address" aria-describedby="emailHelp" value="vivek@gmail.com">
              
              <div id="emailHelp" class="form-text"> <?php echo $email_message; ?></div>
            </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" id="exampleInputPassword1" value="vivek4323">
                    <div id="emailHelp" class="form-text"> <?php echo $password_message; ?></div>
                </div>
                 <br>
            <button type="submit" class="btn btn-outline-success fw-bold">Login</button> 
        </form>

    </div>
    <div class="col-md-3"></div>

   </div>
   </div>
     <?php
     
      include('js.php');

      ?>
  </body>
</html>