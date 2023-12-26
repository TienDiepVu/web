<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td {
            border: 1px solid #ccc;
        }

        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        th {
            background: blue; color: #fff
        }

    </style>
</head>

<body>
    <?php
    $stt = array('1', '2', '3', '4', '5', '6', '7');
    $studentID = array('20210500', '20210501', '20210502', '20210503', '20210504', '20210505', '20210506', );
    $firstName = array('Luu The', 'Nguyen Hoang', 'Nguyen Quoc', 'Tran Tien', 'Truong Cong', 'Luu Ngoc', 'Vu Tuan');
    $lastName = array('Anh', 'Anh', 'Anh', 'Anh', 'Chuong', 'Duong', 'Duong');
    $class = array('DH CNTT CLC', 'DH ky thuat moi truong k67', 'DH CNTT k66a2', 'DH CNTT k66h2', 'DH CNTT CLC', 'DH CNTT CLC', 'DH CNTT k66a2', );
    echo "<table>";
    echo "<tr>";
    echo "<th>STT</th>";
    echo "<th>Ma SV</th>";
    echo "<th>Ho lot</th>";
    echo "<th>Ten</th>";
    echo "<th>Lop</th>";
    echo "</tr>";

    for ($i = 0; $i < 7; $i++) 
        {
            echo "<tr>";
            echo"<td>$stt[$i]</td>";
            echo"<td>$studentID[$i]</td>";
            echo"<td>$firstName[$i]</td>";
            echo"<td>$lastName[$i]</td>";
            echo"<td>$class[$i]</td>";
            echo"</tr>";
        }
        echo "</table>";
    ?>
</body>

</html>