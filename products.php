<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abhi-Collection</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>

        <?php
            include('navbar.php');
            include('animation.php');
            $conn = mysqli_connect("localhost", "root", "", "ecommerce");
            $limit = 5;
            if(isset($_GET['start'])){
                $start = $_GET['start'];
            }else{
                $start = 1;
            }
            $offset = ($start - 1) * $limit;

             if(isset($_GET['category_id'])){
                $cat_id = $_GET['category_id'];
                $qry = "SELECT * FROM products WHERE category_id = $cat_id ORDER BY id DESC LIMIT {$offset},{$limit}";
                $count_qry = "SELECT * FROM products WHERE category_id = $cat_id";
             }else if (isset($_POST['search_text'])){
                $text = $_POST['search_text'];
                $text = strtolower($text);
                $qry = "SELECT * FROM products WHERE product_name LIKE '%$text%' OR product_title LIKE '%$text%' OR product_desc LIKE '%$text%'  ORDER BY id DESC LIMIT {$offset},{$limit}";
                $count_qry = "SELECT * FROM products WHERE product_name LIKE '%$text%' OR product_title LIKE '%$text%' OR product_desc LIKE '%$text%' ";
            }else{
                $qry = "SELECT * FROM products ORDER BY id DESC LIMIT {$offset},{$limit}";
                $count_qry = "SELECT * FROM products";
             }

             $res = mysqli_query($conn, $qry);
             $count_res = mysqli_query($conn, $count_qry);
             $total_records = mysqli_num_rows($count_res);
        ?>

        <div class="container mt-5">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php
                  while($row = mysqli_fetch_array($res)){
                    $discounted_price = ( $row['discount'] / 100) *  $row['price'];
                    $total_price = $row['price'] - $discounted_price;
                    $gst = ( $row['tax'] / 100) *  $total_price;
                    $grand_total = $total_price + $gst;
                ?>
                    <div class="col-md-3 my-1">
                        <a href="display.php?id=<?php echo $row['id']; ?>" style="text-decoration:none">
                            <div class="card h-100">
                                <img src="product_images/<?php echo $row['product_img']; ?>" class="card-img-top" width="300" height="300" alt="<?php echo $row['product_name'] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                                    <p class="product-offer">Price: <s> <?php echo $row['price']; ?></s></p>
                                    <p class="product-offer">Discount: <?php echo $row['discount']; ?> %</p>
                                    <p class="product-price"><b>Our Price: <?php echo  $grand_total ?></b></p>
                                    <!-- <a href="display.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-info">Show Details</a> -->
                                </div>
                            </div>
                        </a>
                    </div>

                <?php 
                  }
                ?>
            </div>

            <div class="row">
                <div class="col-md-12">
                <nav aria-label="...">

                <?php

                    if($total_records > 0){
                        $total_page =  ceil($total_records / $limit);
                        echo '<ul class="pagination justify-content-center">';
                        if($start > 1){
                            if(isset($_GET['category_id'])){
                                $cat_id = $_GET['category_id'];
                                echo '<li class="page-item"><a class="page-link" href="products.php?start='.($start - 1).'&&category_id='.$cat_id.'">Prev</a></li>';
                            }else{
                                echo '<li class="page-item"><a class="page-link" href="products.php?start='.($start - 1).'">Prev</a></li>';
                            }
                            
                        }
                        for($i = 1; $i <= $total_page; $i++){
                            if($i == $start){
                                $active = "active";
                            }else{
                                $active = "";
                            }
                            if(isset($_GET['category_id'])){
                                $cat_id = $_GET['category_id'];
                                echo '<li class="' .$active. '"><a class="page-link" href="products.php?start=' . $i . '&&category_id='.$cat_id.'">' . $i . '</a></li>';
                            }else{
                                echo '<li class="' .$active. '"><a class="page-link" href="products.php?start=' . $i . '">' . $i . '</a></li>';
                            }
                            
                        }
                        if($total_page > $start){
                            if(isset($_GET['category_id'])){
                                $cat_id = $_GET['category_id'];
                                echo '<li class="page-item"><a class="page-link" href="products.php?start='.($start + 1).'&&category_id='.$cat_id.'">Next</a></li>';
                            }else{
                                echo '<li class="page-item"><a class="page-link" href="products.php?start='.($start + 1).'">Next</a></li>';
                            }
                            
                        }
                    
                        echo "</ul>";
                    }
                ?>
                    </nav>
                </div>
            </div>
        </div>        
   <?php
    include('js.php');
    ?>
    </body>
</html>
