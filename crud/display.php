<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <table class="table container">
            <thead class="thead-dark">
                <tr>
                    <th>StudentID</th>
                    <th>FullName</th>
                    <th>Class</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                //ket noi CSDL
                require_once('connect.php');
                //truy van CSDL
                $display_sql = "SELECT * FROM sinhvien";
                //thuc hien cau lenh
                $result = mysqli_query($conn, $display_sql);
                //duyet qua mang ra in ra du lieu
                if (mysqli_num_rows($result) > 0) {
                    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['studentid'] ?>
                            </td>
                            <td>
                                <?php echo $row['fullname'] ?>
                            </td>
                            <td>
                                <?php echo $row['class'] ?>
                            </td>
                            <td>
                                <a href="edit.php?sid=<?php echo $row['mon_an_id'] ?>" class="btn btn-primary">Edit</a>
                                <a onclick="return confirm('Delete this student?')" ;
                                    href="delete.php?sid=<?php echo $row['mon_an_id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <h1 class=" text-center">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                Create new student
            </button>
        </h1>
        <div class=" modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create new student</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="add.php" method="get">
                            <div class="form-group">
                                <label for="studentID">Student ID</label>
                                <input type="text" class="form-control" name="studentID" id="studentID">
                            </div>
                            <div class="form-group">
                                <label for="fullname">FullName</label>
                                <input type="text" class="form-control" name="fullname" id="fullname">
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" class="form-control" name="class" id="class">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>