<?php 
 session_start();
 define('SECURITY', True);
 include_once('config/db.php');
 $prd_id = $_GET['prd_id'];
 if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
     $name_image = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM product WHERE prd_id = $prd_id"));
     $url = 'images/'.$name_image['prd_image'];
     if(file_exists($url)){
         unlink($url);
     }
     $sql_pro = "DELETE FROM product WHERE prd_id = $prd_id";
     mysqli_query($conn,$sql_pro);
     header("location: index.php?page_layout=product");
 }
?>