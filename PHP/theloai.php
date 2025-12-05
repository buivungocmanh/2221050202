<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        .xoa{
            padding: 0 10px;
            background-color: red;
            color: white;
            border-radius: 5px;
        }
        .capnhat{
            background-color: blue;
            padding: 0px 10px;
            color: white;
            border-radius: 5px;
        }
        .them{
            background-color: white;
            border: 1px solid black;
            padding: 10px 20px;
            color: black;
            border-radius: 5px;

        }
        td{
            padding: 10px;
        }
        .chucnang{
            display: flex;
        }
        .control{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .chinh{
            display: flex;
              align-items: center;
            justify-content: space-between;

        }
    </style>
</head>
<body>
    <div class="control">
        <h1>Thông tin thể loại</h1>
        <div>
            <a class="them" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
        </div>
    </div>
    <table border=1>
        <tr>
            <th>id</th>
            <th>Tên thể loại</th>
            <th>Chức năng</th>
        </tr>
        <?php 
            include("connect.php");
            $sql = "SELECT *FROM `the_loai`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?> 
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["ten_the_loai"] ?></td>
            <td class="chuc-nang">
                <a class="capnhat" href="index.php?page_layout=capnhattheloai&id=<?php echo $row["id"]?>&tenTheLoai">Cập nhật</a>
                <a class="xoa" href="xoatheloai.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>