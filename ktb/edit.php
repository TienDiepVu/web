<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin món ăn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php
        //lay id can sua 
        $id = $_GET['sid'];
        //ket noi CSDL
        require_once("connect.php");
        // lay du lieu tu CSDL
        $sql_get = "SELECT * FROM monan WHERE mon_an_id = $id";
        //thuc thi cau lenh sql
        $result = mysqli_query($conn, $sql_get);
        $row = mysqli_fetch_assoc($result);
        //in du lieu ra form
    ?>
    <div class="container">
        <h1 class="text-center">Món ăn</h1>
        <form action="update.php" method="get">
            <input type="hidden" name="sid" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="ten_mon">Tên món</label>
                <input type="text" class="form-control" name="ten_mon" value=" <?php echo $row['ten_mon'];  ?>">
            </div>
            <div class="form-group">
                <label for="loai_mon">Loại món</label>
                <input type="text" class="form-control" name="loai_mon" value=" <?php echo $row['loai_mon'];  ?>">
            </div>
            <div class="form-group">
                <label for="mo_ta">Mô tả</label>
                <input type="text" class="form-control" name="mo_ta" value=" <?php echo $row['mo_ta'];  ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
        $conn->close();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>