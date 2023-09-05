<?php
    // Connection of database
    $conn = mysqli_connect("localhost", "root", "", "ecommerce");
 //    echo "Connection successfull";

  // Get input method
  if(isset($_POST['submit'])){
    $pc_name = $_POST['pc_name']; 

    // Query to insert data into database
    $query = "INSERT INTO `categories`(`name`) VALUES ('$pc_name')";
    $result = mysqli_query($conn , $query);
      
    if($result){
      echo "Data inserted successfully";
    }else{
      echo "Data inserted not successfully";
    }  
  }
    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Product Category Pages</title>
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
                       <form method="POST" class="form">
                            <div class="form-group">
                                <label for="exampleInput" class="form-label fw-bold">Product Category Name</label>
                                <input type="text" name="pc_name"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-outline-success fw-bold" name="submit">Submit</button>
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