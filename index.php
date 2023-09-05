<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Abhi-Collection page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include('navbar.php');
      include('js.php');
      include('carousel.php');
      $conn = mysqli_connect("localhost", "root", "", "ecommerce");
      $qry = "SELECT * FROM products limit 8 ";
      $res = mysqli_query($conn, $qry);
    ?>

    <div class="container mt-4">
      <div class="row">

        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Welcome to Abhi Collection</b></h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, recusandae temporibus at odit dolore incidunt odio eius eos impedit aperiam maxime natus qui. Vitae praesentium est laborum maxime a? Corporis voluptatem eaque at quasi quisquam officiis enim autem voluptate. Nobis consequatur repudiandae, fugiat laborum magnam aliquam libero numquam ratione omnis. Totam repudiandae placeat natus cum hic? Qui iusto est doloribus blanditiis sed reprehenderit iste porro. Harum reiciendis quod dolorum delectus dolor perspiciatis ex totam qui aliquid non culpa sunt architecto id, suscipit sint, vitae error amet, quae eius in. Aperiam optio dignissimos, nihil blanditiis eius quia ducimus, maxime reprehenderit suscipit distinctio repellendus voluptate eos reiciendis, illo aut consequuntur. Odio deleniti dolor quod ratione corrupti itaque, consequatur quam laborum tempora aliquid fugit magni maxime debitis id.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
            <img src="Images/product_image.png" class="img-fluid" alt="...">
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

      <div class="row">
          <?php
            while($row = mysqli_fetch_array($res)){
              $discounted_price = ( $row['discount'] / 100) *  $row['price'];
              $total_price = $row['price'] - $discounted_price;
              $gst = ( $row['tax'] / 100) *  $total_price;
              $grand_total = $total_price + $gst;
          ?>
            <div class="col-md-3 my-1">
                <div class="card h-100">
                    <img src="product_images/<?php echo $row['product_img']; ?>" class="card-img-top" alt="camera_image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                        <p class="product-offer">Price: <s> <?php echo $row['price']; ?></s></p>
                        <p class="product-offer">Discount: <?php echo $row['discount']; ?> %</p>
                        <p class="product-price"><b>Our Price: <?php echo  $grand_total ?></b></p>
                        <a href="display.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-info">Show Details</a>
                    </div>
                </div>
            </div>
            <?php 
              }
            ?>
      </div>
    </div>
  </body>
</html>