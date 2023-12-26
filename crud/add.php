<?php
    //ket noi CSDL
    require_once("connect.php");
    //lay du lieu tu form
    $stdid = $_GET["studentID"];
    $fullname = $_GET["fullname"];
    $class = $_GET["class"];
    //viet lenh nhap du lieu vao CSDL
    $add_sql = "INSERT INTO sinhvien (studentid, fullname, class) VALUES ('$stdid', '$fullname', '$class')";
    // thuc thi cau lenh
    mysqli_query($conn, $add_sql);
    //dong ket noi
    $conn->close();
    //chuyen ve trang hien thi
    header("location: display.php");
?>