<?php

if (isset($_GET['delete_product'])){
    $delete_id = $_GET['delete_product'];
    //delete query

    $delete_product = "DELETE FROM `product` WHERE product_id=$delete_id";
    $delete_product_query = mysqli_query($con, $delete_product);
    if ($delete_product_query) {
        echo "<script>alert('Product deleted succesfully!')</script>";
        echo "<script>window.open('./index.php','_self')</script>";
    }
}   

?>