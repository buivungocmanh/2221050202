<?php
if (!empty($_POST['tenQuocGia'])) {
    $ten = $_POST['tenQuocGia'];
    $sql = "INSERT INTO quoc_gia(ten_quoc_gia) VALUES('$ten')";
    mysqli_query($conn, $sql);
    header("location: index.php?page_layout=quocgia");
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
    <h1>Thêm quốc gia</h1>
    <div class="container">
    <form action="index.php?page_layout=themquocgia" method ="post">
    
    <div class="box">
        <p>Tên quốc gia</p>
    <input type= "text" name= "tenQuocGia" placeholder="Tên quốc gia">
    </div>
    <div class="box"><input type="submit" value="Thêm mới">
    </div>
    </form>
    </div>
    
</body>
</html>