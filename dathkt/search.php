<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <h1 class="title-head text-uppercase">Nhạc cụ dân tộc Việt Nam <i class="fa-solid fa-drum"></i></h1>
        <form method="get" class="search d-flex" >
            <button class="btn btn-primary btn-search" onclick="search()" type="submit" name="btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input class="form-control" type="text" placeholder="Enter keyword..." name="q" id="searchInput">
        </form>
        <ul id="searchResults"></ul>
    </div>
    
    
    <script src="script.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
<?php

require_once "connect.php";

if (isset($_POST["submit"])) {
    $keyword = $_GET["q"];

    $sql = "SELECT * FROM videos WHERE title LIKE '%$keyword%' OR description LIKE '%$keyword%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
    }
}

$conn->close();

?>
