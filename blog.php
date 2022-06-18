<?php 
    ob_start();
    session_start();
    define('SECURITY', True);
    include_once('admin/config/db.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">   
    <link rel="stylesheet" href="css/bootstrap.css.map">   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">      
</head>
<body>
    
    <!-- header -->
    <header style="padding :40px;">
        
    <div class="container " id="head" style="padding:50px; border-style: ridge;">
    <!-- navbar -->
    <?php include_once('include/navbar.php'); ?>
    <!-- end -->

        <div class="row " id="body" style="padding-top: 50px;">
        <div class="col-md-9">
                     <?php 
                        if(isset($_GET['page_layout'])){
                            switch($_GET['page_layout']){
                                case "product": include_once('include/product.php'); break;
                                case "featured": include_once('include/featured.php'); break;
                                case "category": include_once('include/category.php'); break;
                                case "post": include_once('include/post.php'); break;
                                case "menucat": include_once('include/menucat.php'); break;
                                case "search": include_once('include/search/search.php'); break;
                               
                              
                                
                            }
                        }else {
                            
                         
                        }
                        include_once('include/menuleft.php');            
                    ?>
        </div>
                <!-- menuleft -->
                
                 <!-- end -->
           
               <!-- menuright -->
              <?php include_once('include/menuright.php'); ?>
                 <!-- end -->
         
        </div>
    </div>

</header>
<!-- end header -->
<!-- footer -->
<div class="container text-center " >
<p> Copyright © 2022 The Present Writer · <a  href="admin/index.php">Log in</a> </p>
</div>
</body>
</html>