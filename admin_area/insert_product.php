<?php
include('../connect.php');
if (isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $temp_product_image = $_FILES['product_image']['tmp_name'];

    //check empty condition
    if ($product_title=='' || $product_desc=='' || $product_price=='' || $product_image==''){
        echo "<script>alert('Fill all the available fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_product_image, "./product_images/$product_image");
        //insert query
        $insert_product = "INSERT INTO `product` (product_title, product_desc, product_price, product_image) values ('$product_title', '$product_desc', '$product_price', '$product_image')";

        $result_query = mysqli_query($con, $insert_product);
        if($result_query){
            echo "<script>alert('Succesfully inserted the product!')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Product</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="form_styles.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
</style>
</head>
<body>
<button class="home"><a href="index.php">Home</a></button>
    <div class="container-form">
    
        <h1 class="center">Insert Product</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="product_title">Product title</label>
            <input type="text" name="product_title" id="product_title" placeholder="Enter product title" required>
            
            <label for="product_desc">Product description</label>
            <input type="text" name="product_desc" id="product_desc" placeholder="Enter product description" required>
            
            <label for="product_price">Product price</label>
            <input type="text" name="product_price" id="product_price" placeholder="Enter product price" required>
            
            <label for="product_image" class="file">Product image</label>
            <input type="file" name="product_image" id="product_image" value="Upload product image" required>


            <input type="submit" name="insert_product" class="insert-btn btn" value="Insert Product">
        </form>
        
    </div>
</body>
</html>

<?php
include ("../footer.php");
?>