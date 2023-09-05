<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Producr Pages</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include("navbar.php");
        include('animation.php');
        $conn = mysqli_connect("localhost", "root", "", "ecommerce");
        $qry = "SELECT * FROM categories";
        $res = mysqli_query($conn, $qry);
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                   <?php 
                      if(isset($_SESSION['success'])){
                        echo $_SESSION['success'];
                    }
                   ?>
                </div>
            </div>
            <div class="row w-60 .border ..border-primary border-round p-5" style="background-color:rgb(fff, 0, 0); opacity:0.8">
                <div class="col-md-12">
                    <form method="POST" action="store_product.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputid" class="form-label fw-bold">Product Image</label>
                            <input type="file" name="p_image"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputid" class="form-label fw-bold">Product Name</label>
                            <input type="text" name="p_name"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputid" class="form-label fw-bold">Product Title</label>
                            <input type="text" name="p_title"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputid" class="form-label fw-bold">Product Description</label>
                            <input type="text" name="p_desc"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputid" class="form-label fw-bold">Product Price</label>
                            <input type="text" name="p_price"class="form-control" id="exampleInput" aria-describedby="emailHelp">
                        </div>

                        
                        <div class="mb-3">
                                <label for="exampleInputid" class="form-label fw-bold">Select Category :</label>
                                <select class="form-select" name="category" >
                                    <option value='5' selected>-----Select Category----</option> 
                                    <?php 
                                        while($row = mysqli_fetch_array($res)){
                                    ?>
                                        <option value="<?php echo  $row['id'] ?>"><?php echo $row['name'] ?></option>
                                    <?php 
                                        }
                                    ?>
                                 </select>
                        </div>

                        <div class="mb-3">
                                <label for="exampleInputid" class="form-label fw-bold">Tax</label>
                                <select class="form-select" name="p_tax" >
                                <option value='0' selected>-----Select Tax----</option> 
                                    <option value='9'>9%</option> 
                                    <option value='12'>12%</option>
                                    <option value='18'>18%</option> 
                                 </select>
                        </div>

                        <div class="mb-3">
                                <label for="exampleInputid" class="form-label fw-bold">Discount</label>
                                <select class="form-select" name="p_discount" >
                                    <option value='0' selected>-----Select Discount----</option> 
                                    <option value='5'>5%</option> 
                                    <option value='10'>10%</option> 
                                    <option value='15'>15%</option> 
                                    <option value='20'>20%</option> 
                                    <option value='25'>25%</option> 
                                    <option value='30'>30%</option> 
                                    <option value='50'>50%</option> 
                                    
                                </select>
                        </div> 
                        <button type="submit" class="btn btn-outline-success fw-bold" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
    include('js.php');
    unset($_SESSION['success'])
    ?>
    </body>

</html>