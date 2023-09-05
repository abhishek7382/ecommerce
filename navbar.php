<?php 
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "ecommerce");
    $qry = "SELECT * FROM categories";
    $res = mysqli_query($conn, $qry);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-info" > <!-- style="background-color: #3399ff; color:#fff;"  -->
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php"><i>Abhi-Collection</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="nav" id="navbarSupportedContent">
            <div class="search_bar">
            <div class="input-group">
                    <form class="d-flex" role="search" method="POST" action="products.php">
                        <input type="text" class="form-control me-2 rounded-pill" placeholder="Search Product" name="search_text" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        <button class="btn btn-outline-primary input-group-text rounded-pill ms-n5" type="submit">Search</button>
                    </form> 
             </div>
            </div>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_product.php">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_category.php">Add Category</a>
                </li>
                <div class="nav-item">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Category
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <?php 
                            while($row = mysqli_fetch_array($res)){
                         ?>
                        <a class="dropdown-item" href="products.php?category_id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                        <?php 
                            }
                        ?>
                    </div>
                </div>
                <li class="nav-item">
                    <?php
                      if(!isset($_SESSION["email"]) AND !isset($_SESSION['password']) ){
                        $url = "login.php";
                        $lable = "Login";
                       }else{
                        $url = "logout.php";
                        $lable = "Logout";
                       }
                      ?>
                    <a class="nav-link" href="<?php echo $url ?>"><?php echo $lable ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>