<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../admin_area/form_styles.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
</style>
</head>
<body class="log-in-bg">
    <div class="container-form">
        <h1 class="center">Log in</h1>
        <form action="" method="post" class="log">
            <label for="name">Username</label>
            <input type="text" name="name" id="name" required placeholder="Enter your username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">

            <input type="submit" value="Login" name="user_login" class="btn"> 
            <p>Don't have an account? <a href="user_registration.php">Register</a></p>
        </form>
    </div>
</body>
</html>

<?php

    if (isset($_POST['user_login'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
    
        $select_query = "SELECT * FROM `user_table` WHERE user_name = '$name'";
        $result = mysqli_query($con, $select_query);
    
        if (!$result) {
            die('Error in query: ' . mysqli_error($con));
        }
    
        $row_data = mysqli_fetch_array($result);
    
        if ($row_data) {
            // User exists, check password
            if ($row_data['user_password'] == $password && $row_data['usertype'] == 'admin') {
                    echo "<script>window.open('../admin_area/index.php')</script>";
            } elseif ($row_data['user_password'] == $password) {
                echo "Login successful! Loading...";
                echo "<script>setTimeout(()=>{window.location.href = '../index.php';}, 500)</script>";
            } else {
                echo "Incorrect password!";
            }
    
            // Check if the user is an admin
           
        } else {
            echo "The user does not exist! Register11111";
        }
    }
    
?>