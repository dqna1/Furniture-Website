<?php
function getProducts(){
    global $con;
    $select_query = "Select * from `product`";
            $result_query = mysqli_query($con, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_desc=$row['product_desc'];
                $product_price=$row['product_price'];
                $product_image=$row['product_image'];

                echo "<div class='item'>
                <div class='item-image'><img src='admin_area/product_images/$product_image' class='product-image' alt='$product_title'></div>
                <div class='item-title'>$product_title</div>
                <div class='item-description'>$product_desc</div>
                <div class='item-price'>$product_price</div>
                <button class='cart-btn btn'>Add to cart</button>
            </div>";
}
}


function search_product(){
    global $con;
    if (isset($_GET['search_data_product'])){
        $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `product` WHERE product_title LIKE '%$search_data_value%'";
            $result_query = mysqli_query($con, $search_query);
            $num_of_rows = mysqli_num_rows($result_query);
            if ($num_of_rows==0){
                echo "<h2 class='atention'>The item does not exist!</h2>";
            }
            while ($row = mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_desc=$row['product_desc'];
                $product_price=$row['product_price'];
                $product_image=$row['product_image'];

                echo "<div class='item' style='height: 400px; width: 285px; margin-bottom: 50px;'>
                <div class='item-image'><img src='admin_area/product_images/$product_image' style='width:100%; overflow: hidden; height: 213px;' alt='$product_title'></div>
                <div class='item-title'>$product_title</div>
                <div class='item-description'>$product_desc</div>
                <div class='item-price'>$product_price lei</div>
                <button class='cart-btn'>Add to cart</button>
            </div>";
}
}
}



?>