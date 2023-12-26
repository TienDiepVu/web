<?php
    require 'connect1.php';
    $khach_hang_id = $_GET["khach_hang_id"];
    $tai_khoan = $_GET["tai_khoan"];
    $mat_khau = $_GET["mat_khau"];
    $so_tien = $_GET["so_tien"];
    $sql = "INSERT INTO khach_hang( khach_hang_id, tai_khoan, mat_khau, so_tien) VALUES ('$khach_hang_id', '$tai_khoan', '$mat_khau', '$so_tien')";
    if ($conn->query($sql) === true) {
        echo "Tao thanh cong";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>