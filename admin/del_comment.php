<?php 
   
   session_start();
   define('SECURITY', True);
   include_once('config/db.php');
    $comm_id = $_GET['comm_id'];
    if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
        $sql_comm = "DELETE FROM comment WHERE comm_id = $comm_id";
        mysqli_query($conn,$sql_comm);
        header("location: index.php?page_layout=comment");
    }
?>