<?php
 session_start();
 define('SECURITY', True);
 include_once('config/db.php');
 $cat_id = $_GET['cat_id'];
 if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
     $sql_cat = "DELETE FROM category WHERE cat_id = $cat_id";
     mysqli_query($conn,$sql_cat);
     header("location: index.php?page_layout=category");
 }
?>