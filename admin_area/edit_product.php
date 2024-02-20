<?php

    if (isset($_GET['edit_product'])){
        $edit_id = $_GET['edit_product'];
        
        $get_data = "SELECT * FROM `product` WHERE product_id=$edit_id";
        $result = mysqli_query($con, $get_data);
        $row = mysqli_fetch_assoc($result);
        $product_title = $row['product_title'];
        $product_desc = $row['product_desc'];
        $product_price = $row['product_price'];
        $product_image = $row['product_image'];
    }

?>

<div class="container">
    <h1>Edit product</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="product_title">Product Title</label>
    <input type="text" id="product_title" name="product_title" value=<?php echo $product_title;?>>

    <label for="product_desc">Product description</label>
    <input type="text" name="product_desc" id="product_desc" value=<?php echo $product_desc;?>>
            
    <label for="product_price">Product price</label>
    <input type="text" name="product_price" id="product_price" value=<?php echo $product_price;?>>
            
    <label for="product_image">Product image</label>
    <input type="file" name="product_image" id="product_image" required>
    <img src="./product_images/<?php echo $product_image;?>" class='product-img'>

    <input type="submit" name="edit_product" class="insert-btn btn" value="Update product">
    </form>
</div>


<!-- editing products -->
<?php

if (isset( $_POST['edit_product'])){
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $temp_image = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($temp_image, "product_images/$product_image");

    $update_products = "UPDATE `product` SET  product_title='$product_title', product_desc='$product_desc', product_price='$product_price', product_image='$product_image' WHERE product_id=$edit_id"; 
    $result = mysqli_query($con, $update_products);

    if ($result){
        echo "<script>alert('Product updated succesfully!')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }

}

?>