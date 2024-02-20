<?php
include('connect.php');
include('functions/common_functions.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <link rel="stylesheet" href="styles.css" >
    <script src="https://kit.fontawesome.com/e935aa7f6c.js" crossorigin="anonymous"></script>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
</style>
</head>
<body>
    <!-- navbar -->
    <div class="container">
        <nav>
             <div class="logo">
                <a href="index.php"><img src="img/Logo.svg" alt="Logo"></a>
             </div>
             <div class="menu">
                <a href="index.php" class="menu-link">Home</a>
                <a href="#" class="menu-link">Shop</a>
                <a href="#" class="menu-link">About</a>
                <a href="#" class="menu-link">Contact </a>
             </div>
             <div class="user-cart-icons">
                <a href="user_area/user_login.php" class="icons"><i class="fa-regular fa-user"></i></a>
                <a href="#" class="icons"><i class="fa-solid fa-cart-shopping"></i></a>
                <form action="search_product.php" method="get">
                    <input type="search" name="search_data" id="search-bar" placeholder="search...">
                    <input type="submit" value="Search" name="search_data_product" id="search-btn">
                </form>
             </div>
        </nav>
        <div class="shop-section">
            <img id="shop-img" src="img/image1.svg" alt="shop">
            <p class="section-title">Shop</p>
        </div>

        <!-- get products -->
        <div class="items-section">
        <?php
           getProducts();
        ?>
        </div>
    </div>
</body>
</html>