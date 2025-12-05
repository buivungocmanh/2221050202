<?php
if (!empty($_POST['ten-the-loai'])) {
    $tentheloai = $_POST['ten-the-loai'];
    $sql = "INSERT INTO the_loai(ten_the_loai) VALUES('$tentheloai')";
    mysqli_query($conn, $sql);
    header("location: index.php?page_layout=theloai");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1>Thêm thể loại</h1>
    <div class="container">
    <form action="index.php?page_layout=themtheloai" method ="post">
    
    <div class="box">
        <p>Tên thể loại</p>
    <input type= "text" name= "ten-the-loai" placeholder="Tên thể loại">
    </div>
    <div class="box"><input type="submit" value="Thêm mới">
    </div>
    </form>
    </div>
    
</body>
</html>