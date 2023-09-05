<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
  <body>
    <?php
        include("navbar.php");
        include('animation.php');
    ?>
    <div class="container mt-5">
        <div class="row" style="background-color:rgb(fff, 0, 0); opacity:0.8">
            <div class="col-md-12">
                <div class="wrapper">
                    <form method="POST" class="" action="store_register.php">
                        <h1 class="text-center text-light fw-bold">Welcome!</h1>
                        <h3 class="text-center text-dark fw-semibold">Create Account</h3>

                        <div class="form-group">
                            <label for="exampleInputid" class="form-label fw-bold">FULL NAME :</label>
                            <input type="text" name="user_name" class="form-control" placeholder="Enter your name"  id="exampleInput" aria-describedby="emailHelp" value="Vivek">
                            (max 30 characters a-z and A-Z)
                        </div>

                        <div class="form-group">
                            <label for="exampleInputid" class="form-label fw-bold">EMAIL :</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email" id="exampleInput" aria-describedby="emailHelp" value="vivek@gmail.com">
                            <p class="text-danger"><?php echo $_SESSION['user_mail_exist'] ?? '' ?> </p>
                            (max 30 characters a-z and A-Z) 
                        </div>

                        <div class="form-group">
                            <label for="exampleInputid" class="form-label fw-bold">MOBILE :</label>
                            <input type="text" name="mobile_number" class="form-control" placeholder="Enter your mobile number" id="exampleInput" aria-describedby="emailHelp" value="1234567890">
                            (10 digit number)
                        </div>

                        <div class="form-group">
                            <label for="exampleInputid" class="form-label fw-bold">PASSWORD :</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password" id="exampleInput" aria-describedby="emailHelp" value="1234567890">
                            Must be 8-20 characters long.  
                        </div>
                        <button type="submit" class="btn btn-outline-success fw-bold" name="submit">Signup</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
   <?php
    include('js.php');
    ?>

        <style>
            .wrapper{
                margin-left: 25%;
                width: 50%;
            }
        </style>

  </body>
</html>