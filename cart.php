<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Product Category</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include('navbar.php');
        include('animation.php');
        ?>

        <div class="container mt-3">
            <div class="row">

                <div class="col-md-12">
                    <div class="card mb-3" style="max-width: 1000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="Images/cloth1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-warning-emphasis"><b>T-shirt</b></h5>
                                <p class="card-text">Pack of 2 Men Striped Round Neck Pink, Grey T-Shirt</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                        </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3" style="max-width: 1000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/cloth2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary-emphasis"><b>T-shirt</b></h5>
                                    <p class="card-text">Men Printed Round Neck Dark Green T-Shirt</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3" style="max-width: 1000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/cloth6.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-danger-emphasis"><b>Blazer</b></h5>
                                    <p class="card-text">Men Solid Single Breasted Casual Blazer  (Maroon)</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mb-3" style="max-width: 1000px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="Images/cloth5.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-info-emphasis"><b>Shirt</b></h5>
                                    <p class="card-text">Men Regular Fit Solid Casual Shirt</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    include('js.php');
    ?>
    
    </body>
</html>