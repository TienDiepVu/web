<?php
    //tao doi tuong xoa
    $svid = $_GET['sid'];
    //ketnoi
    require_once("connect.php");
    //tao cau lenh xoa du lieu
    $sql_delete = "DELETE FROM sinhvien WHERE id = $svid ";
    // thuc thi cau lenh
    mysqli_query($conn, $sql_delete);
    header("location: display.php");
    $conn->close();

?>