<?php
$hostname="localhost";
$username="root";
$password="";
$database="mystore";
$con=mysqli_connect($hostname, $username, $password) or die ("Nu mă pot conecta la baza de date");
mysqli_select_db($con, $database) or die ("Nu găsesc baza de date");
?>