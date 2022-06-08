<?php 
    if(!defined('SECURITY')){
        die('Bạn không có quyền truy cập file này !');
    }
    $conn = mysqli_connect('localhost','root','','cmw');
    if(!$conn){
        echo "Kết nối Database thất bại";
    }
?>