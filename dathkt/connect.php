<?php
    $conn = mysqli_connect("localhost","root","","dathkt");
    if ($conn ->connect_error){
        die("connection failed: " . $conn -> connect_error);
    }
?>