<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="form_styles.css">
    <script src="https://kit.fontawesome.com/e935aa7f6c.js" crossorigin="anonymous"></script>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
</style>
</head>

<body>
<div class="container">
    <h1 class="center">Admin, Welcome</h1>
    <div class="btn-center">
    <button class="btn small"><a href="insert_product.php">Insert New Product</a></button>
    <button class="btn small"><a href="index.php?view_product">View Products</a></button>
    <button class="btn small"><a href="index.php?list_users">List Users</a></button>
    <button class="btn small"><a href="../index.php">Logout</a></button>
    </div>
</div>
    <?php
        // if(isset($_GET['insert_product'])){
        //     include('insert_product.php');
        // }
        if(isset($_GET['view_product'])){
            include('view_product.php');
        }

        if(isset($_GET['edit_product'])){
            include('edit_product.php');
        }

        if(isset($_GET['delete_product'])){
            include('delete_product.php');
        }

        if(isset($_GET['list_users'])){
            include('list_users.php');
        }

    ?>
</body>
</html>

<?php
include ('../footer.php');
?>