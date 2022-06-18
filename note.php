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

       <h2>  GỢI Ý</h2>
<p>Là một người sống tối giản, tôi luôn cân nhắc kỹ trước khi mua và sử dụng bất kỳ sản phẩm hay dịch vụ nào. Bởi vậy, trang “Gợi Ý” này được lập ra để tổng hợp những sản phẩm, dịch vụ, thương hiệu mà tôi đã sử dụng và biết rõ giá trị để bạn có thể dễ dàng tìm kiếm khi có nhu cầu. Sử dụng danh sách này sẽ giúp bạn tiết kiệm vô cùng nhiều thời gian, công sức và chi phí! </p>
<br>
<p class="text-center">Trang này sẽ được cập nhật thường xuyên. </p>
<br>
<p>Disclosure: Một số đường link phía dưới là affiliate link. Nếu bạn đăng ký sử dụng dịch vụ hoặc mua sản phẩm qua link này, blog sẽ nhận được khoản hoa hồng nhỏ để tiếp tục hoạt động phi lợi nhuận.</p>

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