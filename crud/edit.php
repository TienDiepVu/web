<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info Student</title>
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
        $sql_get = "SELECT * FROM sinhvien WHERE id = $id";
        //thuc thi cau lenh sql
        $result = mysqli_query($conn, $sql_get);
        $row = mysqli_fetch_assoc($result);
        //in du lieu ra form
    ?>
    <div class="container">
        <h1 class="text-center">Sinh viên</h1>
        <form action="update.php" method="get">
            <input type="hidden" name="sid" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="studentID">Student ID</label>
                <input type="text" class="form-control" name="studentID" value=" <?php echo $row['studentid'];  ?>">
            </div>
            <div class="form-group">
                <label for="fullname">FullName</label>
                <input type="text" class="form-control" name="fullname" value=" <?php echo $row['fullname'];  ?>">
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" name="class" value=" <?php echo $row['class'];  ?>">
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