<?php
    // Lấy ID quốc gia cần sửa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Nếu bấm nút cập nhật
    if(!empty($_POST['ten-quoc-gia'])){
        $tenQuocGia = $_POST['ten-quoc-gia'];

        $sql = "UPDATE quoc_gia SET ten_quoc_gia='$tenQuocGia' WHERE id='$id'";
        mysqli_query($conn, $sql);

        header("location: index.php?page_layout=quocgia");
        exit();
    } else{
        echo '<p class="warning">Vui lòng nhập đầy đủ thông tin</p>';
    }

    // Lấy thông tin quốc gia cũ
    $sql = "SELECT * FROM quoc_gia WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $quocGia = mysqli_fetch_assoc($result);
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
        <form action="index.php?page_layout=capnhatquocgia&id=<?php echo $id ?>" method="post">
            <div class="box">
                <p>Tên quốc gia</p>
                <input type="text" name="ten-quoc-gia" 
                    value="<?php echo $quocGia['ten_quoc_gia']; ?>">
            </div>
            <div class="box">
                <input type="submit" value="Cập nhật">
            </div>
        </form>
    </div>
</body>
</html>