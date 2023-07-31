<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db_name = "testing";  
 $con=mysqli_connect("localhost","root","","testing");


 if (mysqli_connect_error())
 {
    echo"<script>alert('connect to the database');</script>";
    exit();
 }
 
?>