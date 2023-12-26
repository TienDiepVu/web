<?php
    //ket noi CSDL
    require_once("connect.php");
    //lay du lieu tu form
    $ten_mon = $_GET["ten_mon"];
    $loai_mon = $_GET["loai_mon"];
    $mo_ta = $_GET["mo_ta"];
    //viet lenh nhap du lieu vao CSDL
    $add_sql = "INSERT INTO monan (ten_mon, loai_mon, mo_ta) VALUES ('$ten_mon', '$loai_mon', '$mo_ta')";
    // thuc thi cau lenh
    mysqli_query($conn, $add_sql);
    //dong ket noi
    $conn->close();
    //chuyen ve trang hien thi
    header("location: display.php");
?>