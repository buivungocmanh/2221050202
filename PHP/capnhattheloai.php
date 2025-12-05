<?php
    // Lấy ID cần sửa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Nếu bấm nút cập nhật
    if(!empty($_POST['ten-the-loai'])){
        $tenTheLoai = $_POST['ten-the-loai'];

        $sql = "UPDATE the_loai SET ten_the_loai='$tenTheLoai' WHERE id='$id'";
        mysqli_query($conn, $sql);

        header("location: index.php?page_layout=theloai");
        exit();
    } else{
        echo '<p class="warning">Vui lòng nhập đầy đủ thông tin</p>';
    }

    // Lấy thông tin quốc gia cũ
    $sql = "SELECT * FROM the_loai WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $theLoai = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
     <style>
        p{
            font-weight: bold;
            margin:5px 0;
        }
        h1{
            margin: 5px 0;
        }
        .container{
            border: 1px solid black;
            border-radius: 10px;
            width: 35%;
            padding: 20px 0;
            display: flex;
            justify-content: center;
        }
        form{
            width:80%;
        }
        input{
            width:100%;
            padding: 5px 0;

        }
        .box{
            margin: 10px 0;
        }
        .select{
            width: 100%;
            padding: 5px 0;
        }
        .warning{
            color: red;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <div class="container">
        <form action="index.php?page_layout=capnhattheloai&id=<?php echo $id ?>" method="post">
            <div class="box">
                <p>Tên thể loại</p>
                <input type="text" name="ten-the-loai" 
                    value="<?php echo $theLoai['ten_the_loai']; ?>">
            </div>
            <div class="box">
                <input type="submit" value="Cập nhật">
            </div>
        </form>
    </div>
</body>
</html>