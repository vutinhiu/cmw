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

        <p>
        Bạn có thể tìm đọc tất cả các bài viết trên The Present Writer blog theo từ khoá, theo đề tài, hoặc theo thời gian xuất bản.


TÌM KIẾM
Search this website


THEO ĐỀ TÀI
Chủ nghĩa tối giản (Minimalism) (29)
Du lịch (Travel light) (4)
Du học (18)
Hành trình của tôi (59)
Công việc (4)
Covid-19 (5)
Nuôi dạy con (5)
Học tập/Học thuật (Academic) (8)
Học tiếng Anh (7)
Học tiếng Anh cho người "lỡ cỡ" (3)
Học từ cuộc sống (38)
        </p>
        </div>
    </div>

</header>
<!-- end header -->
<!-- footer -->
<div class="container text-center " >
<p> Copyright © 2022 The Present Writer · <a    href="admin/index.php">Log in</a> </p>
</div>
</body>
</html>