<?php
    session_start();
    if(isset($_POST['submit'])){
        $filename = $_FILES["p_image"]["name"];
        $tempname = $_FILES["p_image"]["tmp_name"];
        // $folder = "./product_images/" . $filename;
        $uploadTo = "./product_images/"; 
        $image_quality = 60;
        upload_image($uploadTo, $filename, $tempname, $image_quality);
        $p_name = $_POST['p_name'];
        $p_title = $_POST['p_title'];
        $p_desc = $_POST['p_desc'];
        $p_price = $_POST['p_price'];
        $p_tax = $_POST['p_tax'];
        $p_discount = $_POST['p_discount'];
        $category = $_POST['category'];
        // if (move_uploaded_file($tempname, $folder)){
           $conn = mysqli_connect("localhost", "root", "", "ecommerce");
           $query = "INSERT INTO `products`(`product_name`, `product_title`, `product_desc`, `product_img`, `price`, `discount`, `tax`,`category_id`) VALUES ('$p_name','$p_title','$p_desc','$filename','$p_price','$p_discount','$p_tax','$category')";
           $result = mysqli_query($conn , $query);
        
            if($result){
                $_SESSION['success'] = "<div class='alert bg-success text-light' role='alert'>Data inserted successfully !</div>";
                header("location:add_product.php");
            }else{
                echo "Data inserted not successfully";
            }  
        // }else{
        //     echo "not moved";
        // }
        
    }

        function upload_image($uploadTo, $imageName, $tempPath, $imageQuality){
            $allowImageExt = array('jpg','png','jpeg','gif');
            $basename = basename($imageName);
            $originalPath = $uploadTo . $basename; 
            $imageExt = pathinfo($originalPath, PATHINFO_EXTENSION); 

            if(empty($imageName)){ 
                $error="Please Select files..";
                return $error;
            }else{
                if(in_array($imageExt, $allowImageExt)){ 
                    $compressedImage = compress_image($tempPath, $originalPath, $imageQuality);
                    if($compressedImage){
                      return "Image was compressed and uploaded to server";
                    }else{
                     return "Some error !.. check your script";
                    }
                }else{
                    return "Image Type not allowed";
                }
            } 
        }

        function compress_image($tempPath, $originalPath, $imageQuality){
        
            // Get image info 
            $imgInfo = getimagesize($tempPath); 
            $mime = $imgInfo['mime']; 
            
            // Create a new image from file 
            switch($mime){ 
                case 'image/jpeg': 
                    $image = imagecreatefromjpeg($tempPath); 
                    break; 
                case 'image/png': 
                    $image = imagecreatefrompng($tempPath); 
                    break; 
                case 'image/gif': 
                    $image = imagecreatefromgif($tempPath); 
                    break; 
                default: 
                    $image = imagecreatefromjpeg($tempPath); 
            } 
            
            // Save image 
            imagejpeg($image, $originalPath, $imageQuality);    
            // Return compressed image 
            return $originalPath; 
        }
    include('js.php');
?>