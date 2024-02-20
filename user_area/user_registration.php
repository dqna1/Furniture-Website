<?php
include('../connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../admin_area/form_styles.css">
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
</style>
</head>
<body class="register-bg">
    <div class="container-form">
        <h1 class="center">New User Registration</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Username</label>
            <input type="text" name="name" id="name" required placeholder="Enter your username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required placeholder="Enter your address">
            <label for="phone">Phone number</label>
            <input type="text" id="phone" name="phone" pattern="[0-9]{9}" placeholder="069544333">
            <div class="cond">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms">I agree to the <a href="#">terms & conditions</a></label>
            </div>
            
            <input type="submit" value="Register" name="user_register" class="btn"> 
            <p>Already have an account? <a href="user_login.php">Login</a></p>
        </form>
    </div>
</body>
</html>


<?php

    if (isset($_POST['user_register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];

        //insert query
        $insert_query = "INSERT INTO `user_table` (user_name, user_email, user_password, user_address, user_phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";
        $sql_execute = mysqli_query($con, $insert_query);
        if ($sql_execute){
            echo "<br>
            <h3>Congratulations! Your account has been succesfully created!</h3>";
        } else {
            die(mysqli_error($con));
        }
    }

?>