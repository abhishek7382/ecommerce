<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Price Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include('navbar.php');
            include('animation.php');
            $id = $_GET['id'];
            $conn = mysqli_connect("localhost", "root", "", "ecommerce");
            $qry = "SELECT * from products where id = $id";
            $res = mysqli_query($conn, $qry);
        ?>

        <div class="container mt-4">
            <div class="row">
                
                <?php
                    while($row = mysqli_fetch_array($res)){
                    $discounted_price = ( $row['discount'] / 100) *  $row['price'];
                    $total_price = $row['price'] - $discounted_price;
                    $gst = ( $row['tax'] / 100) *  $total_price;
                    $grand_total = $total_price + $gst;
                ?>

                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card" style="width: 18rem;">
                       <a href="http://"><img src="product_images/<?php echo $row['product_img']; ?>" class="card-img-top" alt="..."></a> 
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="product-offer">Price: <s> <?php echo $row['price']; ?></s></p>
                            <p class="product-offer">Discount: <?php echo $row['discount']; ?> %</p>
                            <p class="product-offer">Tax: <?php echo $row['tax']; ?> %</p>
                            <p class="product-price"><b>Our Price: <?php echo  $grand_total ?></b></p>
                            <p class="card-text"><?php echo $row['product_title']; ?></p>
                        </div>
                    </div> 
                </div>

                <?php
                    }
                ?>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>