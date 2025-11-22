<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
        // in ra màn hình
        echo "Xin chào, Thế giới! <br>";  

        echo "chào lại <br>";

        // biến
        $ten = "buivungocmanh";
        $tuoi = 21;

        echo $ten ." ".$tuoi."tuổi <br>";

        //hang so
        define("soPi",3.14);
        echo soPi ."<br>";

        //phân biệt dấu nháy đơn và dấu nháy kép
        echo '$ten <br>'; //dấu nháy đơn in nguyên chuỗi
        echo "$ten <br>"; //dấu nháy kép sẽ hiểu biến và in giá trị của biến

        // chuỗi
        #kiểm tra độ dài chuỗi
        echo strlen($ten)."<br>";
        #đếm kí tự
        echo str_word_count($ten)."<br>";
        #tim kiếm kí tự trong chuỗi
        echo strpos($ten,"m")."<br>";
        #thay thế kí tự trong chuỗi
        echo str_replace("manh","manhdeptrai",$ten)."<br>";

        // toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # cộng
        echo $soThuNhat + $soThuHai ."<br>";
        #trừ
        echo $soThuNhat - $soThuHai ."<br>";
        #nhân
        echo $soThuNhat * $soThuHai ."<br>";
        #chia
        echo $soThuNhat / $soThuHai ."<br>";
        #chia lấy dư
        echo $soThuNhat % $soThuHai ."<br>";
        #phép gán
        echo $soThuNhat /= $soThuHai ."<br>"; 
        #so sánh
        echo $soThuNhat == $soThuHai ."<br>"; //false = rỗng
        echo $soThuNhat != $soThuHai ."<br>"; //true = 1
        #câu điều kiện
        $tong = $soThuNhat + $soThuHai;
        if($tong > 15){
            echo "tổng > 15";
        } elseif($tong < 15){
            echo "tổng < 15";
        } else {
            echo "tổng = 15";
        }
        echo "<br>";

        // switch case

        $color = "red";
        switch($color){
            case "red":
                echo "is red";
                break;
            case "blue":
                echo "is blue";
                break;
            
            default:
                echo "no color";
                break;
        }
        echo "<br>";

        // for
        for($i = 1; $i <= 100; $i++){
            echo $i."<br>";
        }
        // mảng
        $mang = ["An","Nhat Anh","Vu Anh"];

        #dem so phan tu trong mang
        echo count($mang)."<br>";
        echo $mang[1]."<br>";
        echo print_r($mang)."<br>";
         $mang[0] = 'buivungocmanh';
        echo print_r($mang)."<br>";
        $mang[] = "phamthudung";
        echo print_r($mang)."<br>";


        ?>
</body>
</html>