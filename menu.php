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
    <p>Bạn có thể tìm đọc tất cả các bài viết trên The Present Writer blog theo từ khoá, theo đề tài, hoặc theo thời gian xuất bản.</p>
      
        <?php
                            $sql = "SELECT * FROM category ORDER BY cat_id ASC";
                             $query = mysqli_query($conn,$sql);
                            while($row_cat = mysqli_fetch_array($query)){
							?>
                          <a href="blog.php?page_layout=category&&cat_id=<?php echo $row_cat['cat_id'] ?>"><?php echo $row_cat['cat_name']?>  </a>
                           <br> <br>
							<?php
							 }
							?>
    </div>

</header>
<!-- end header -->
<!-- footer -->
<div class="container text-center " >
<p> Copyright © 2022 The Present Writer · <a href="admin/index.php">Log in</a> </p>
</div>
</body>
</html>