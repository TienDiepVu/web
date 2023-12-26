<?php
//lay doi tuong can update
$uid = $_GET["sid"];
$stdid = $_GET["studentID"];
$fullname = $_GET["fullname"];
$class = $_GET["class"];
//ketnoi 
require_once("connect.php");
//tao cau lenh update
$update_sql = "UPDATE sinhvien SET studentid = '$stdid' , fullname = '$fullname' , class= '$class' WHERE id=$uid";
//thuc thi cau lenh
//echo "$update_sql";
mysqli_query($conn, $update_sql);
header("location: display.php");
$conn->close();
?>