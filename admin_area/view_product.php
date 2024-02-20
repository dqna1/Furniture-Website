    <div class="container">
    <h1 class="red">All products</h1>
    <table class="view-user">
        <tr>
            <th>ID</th>
            <th>Product Title</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
            <?php
                $get_product = "SELECT * FROM `product`";
                $result = mysqli_query($con, $get_product);
                $number = 0;
                while($row=mysqli_fetch_assoc($result)){
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_desc = $row['product_desc'];
                    $product_price = $row['product_price'];
                    $product_image = $row['product_image'];
                    $number++;
            ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $product_title; ?></td>
                <td><?php echo $product_desc; ?></td>
                <td><?php echo $product_price; ?></td>
                <td><img src='./product_images/<?php echo $product_image; ?>' class='product-img'></td>
                <td class="ed-del"><a href='index.php?edit_product=<?php echo $product_id;?>'><i class='fa-regular fa-pen-to-square'></i></a></td>
                <td class="ed-del"><a href='index.php?delete_product=<?php echo $product_id;?>'><i class='fa-solid fa-trash'></i></a></td>
            </tr>
            <?php
                }
            ?>
    </table>
    </div>
    