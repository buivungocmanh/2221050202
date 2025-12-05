<?php
//session
#Thôg tin đăng nhập, giỏ hàng, cần bảo mật 

//cookie

#Lưu ở phía người dùng 
#Dùng cho những thông tin ít quan trọng 

$cookieName = "user";
$cookieValue = "buivungocmanh";

// setcookie($cookieName, $cookieValue, time()+(86400),"/");
if(isset($_COOKIE[$cookieName])){
    echo"cookie đã tồn tại";
}
else{
    echo "cookie chưa tồn tại";
}

session_start();
$_SESSION["name"] = "bùi văn mạnh";
echo $_SESSION["name"]
?>