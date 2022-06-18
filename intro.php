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
Cám ơn bạn đã ghé thăm blog The Present Writer! Hãy để tôi làm quen với bạn bằng câu chuyện của tôi và của blog bằng lời kể của mình và truyền thông. </p>

<h3> 1. VỀ CHI NGUYỄN</h3> <br>

    <a href="#" class="text-center"><img src="images/chinguyen.png" class="img-fluid" alt="" style="width:30%"></a> <br>
    <p>Xin chào, tôi là Chi Nguyễn (Nguyễn Phương Chi) – tác giả của blog The Present Writer.</p>
 <br>
 <p>
Sinh ra và lớn lên ở Hà Nội, Việt Nam nhưng lập nghiệp và định cư tại Mỹ, tôi cảm giác mình vừa thuộc về nhiều nơi, và vừa không thuộc về một đâu cả. Tôi là Tiến sĩ Giáo dục, chuyên về chính sách, lãnh đạo, và giáo dục so sánh. Các nghiên cứu của tôi xoay quanh vấn đề bình đẳng xã hội và cơ hội học tập cho thanh thiếu niên có hoàn cảnh khó khăn (xem thêm trên trang chinguyen.education). Hiện tôi giảng dạy và nghiên cứu tại một trường đại học công lớn ở Mỹ với vị trí Assistant Professor (tạm dịch: Phó giáo sư dự khuyết). </p>
 <br>
 <p>Trong quá trình sống, học tập, và nghiên cứu, tôi thấy những điều mình học được từ cuộc sống có giá trị rất lớn, thậm chí lớn hơn những điều nhận được qua sách vở. Có những điều rất hay tôi được học trên giảng đường, nhưng phải qua trải nghiệm tôi mới thật sự thấm thía và hiểu được các ý nghĩa sâu sắc của nó. Tôi luôn muốn được sống, trải nghiệm, viết, và chia sẻ với mọi người.</p>
<br>
<p>Khi bắt đầu học cao học tại Mỹ, tôi thường dành 6-8 tiếng/ngày để học, nghiên cứu, và viết các bài báo khoa học bằng tiếng Anh. Sau khoảng 3 năm làm việc liên tục như vậy, tôi cảm thấy mình cần mở ra một kênh khác để viết bằng tiếng Việt, với văn phong thoải mái hơn và nội dung đề cập đến nhiều vấn đề hơn của cuộc sống. Những trang blog đầu tiên ra đời trong những giờ giải lao giữa buổi học, những ngày nghỉ cuối tuần, và những buổi chiều muộn khi tôi ngồi một mình với cốc trà nóng và chú mèo xám Friday. Giữa những năm tháng vừa bận rộn vừa thành thơi ấy, tôi cho ra đời cuốn sách đầu tay, “Một cuốn sách về Chủ nghĩa tối giản” — cuốn sách đầu tiên bằng tiếng Việt về đề tài tối giản. Những năm gần đây, khi bận rộn hơn với công việc và con nhỏ, blog là nơi tôi trải lòng về những suy nghĩ trầm lắng, lặng thầm giữa một xã hội ồn ào, vội vã. </p>
<br>
<p>Tôi nghĩ mình sẽ không bao giờ là người hoàn hảo hay hoàn toàn trưởng thành. Tôi chỉ lớn lên qua từng trải nghiệm cuộc sống, va vấp, và giữa ranh giới đúng-sai. Đây cũng chính là đề tài chủ đạo của blog The Present Writer.</p>
<br>
<p>Bạn có thể liên hệ với Chi qua email: contact@thepresentwriter.com</p>
<br>
Liên hệ kinh doanh, truyền thông qua email: business@thepresentwriter.com
<br>
<h3>2. VỀ THE PRESENT WRITER  </h3> <br>
<a href="#"class="text-center" > <img src="images/logo2.png" alt=""></a>
The Present Writer là blog về những trải nghiệm trong cuộc sống, nghiên cứu, và làm việc của tôi (Chi). Tôi viết những đề tài: học tiếng Anh, du học, giáo dục, kỹ năng mềm, du lịch, phong cách sống, quan hệ xã hội, chủ nghĩa tối giản … — tất cả những điều tôi cảm thấy có ích và có thể giúp tôi trưởng thành hơn. Đây là blog về cuộc sống của tôi. Tôi sống để viết, và viết để được sống “nhiều” hơn. Và hy vọng qua blog của tôi, bạn tìm thấy điều gì đó có ích cho cuộc sống của bạn.

Một số bạn đọc từng gọi blog là “khu vườn xanh yên tĩnh” vì khi đọc blog, bạn cảm thấy như bước vào một thế giới trong trẻo, mát lành, yên ả khác với những ồn ào trên mạng Internet và cuộc sống bên ngoài. Tôi thích cách nhìn này và sẽ cố gắng để blog mãi xanh, trong và tĩnh như nó vốn có.

Tên blog có thể hiểu theo nhiều nghĩa khác nhau. Trước hết, “the present writer” là cách viết tiếng Anh cổ để xưng danh hoặc liên hệ đến tác giả bài viết, tôi tạm dịch là “người viết ở thời hiện tại”. Ý nghĩa này thể hiện blog là trải nghiệm của tôi, và được diễn giải theo cách nhìn của riêng tôi. Ở blog này không có gì là tuyệt đối đúng hay tuyệt đối sai, chỉ có chủ quan và khách quan.

“Present” có nghĩa là “hiện tại.” Tôi luôn cố gắng sống cho hiện tại (be present), không phải cho quá khứ hay tương lai. Những điều tôi viết ra đây là những thứ tôi cảm nhận ở hiện tại. Tôi của quá khứ có thể sẽ không bao giờ viết ra những điều này, và tôi của tương lai có thể sẽ muốn xoá đi, nhưng đây là tôi ở-thời-hiện-tại.

“Present” cũng có thể hiểu là “quà tặng” (gift). Tôi luôn nghĩ cuộc sống đã là một món quà và mỗi người đều được tặng thêm một món quà nữa – đó là khả năng riêng của từng cá nhân. Sau nhiều năm sống và làm việc, tôi nhận ra món quà cuộc sống dành cho mình là “viết.” Viết luôn là “thứ của tôi” và luôn đồng hành cùng tôi bất kể rào cản ngôn ngữ, văn hoá, và biên giới. Bạn có thể hiểu blog này là nơi tôi tặng món quà của tôi cho bạn – đó là những trải nghiệm và con chữ của tôi. Bạn có thể nhận hay không nhận, nhưng hãy nhớ rằng, tôi sẽ luôn ở đây, và món quà sẽ luôn chờ đợi, dành riêng cho bạn.

<h3>3. TRÊN TRUYỀN THÔNG</h3><br>
<a href="#"class="text-center" > <img src="images/On-Media_thepresentwriter.png" alt=""></a>
Trong những năm qua, Chi và blog The Present Writer đã có nhiều cơ hội xuất hiện trên truyền thông để chia sẻ thông điệp sống đẹp và tích cực tới cộng đồng người Việt ở trong nước và quốc tế. Dưới đây là một số ví dụ về truyền thông:
<br>
VTV1: Phóng sự Xu hướng sống tối giản <br>
VOV: Phỏng vấn Mình là người Việt Nam thì nên sử dụng nguồn lực ở nước ngoài để phục vụ cho Việt Nam    <br>
Vietcetera: Phỏng vấn Tại sao người Việt nên sống tối giản  <br>
Cafebiz: Phỏng vấn Sống tối giản 4 năm, blogger Chi Nguyễn: “Nhiều người hiểu sai, loại bỏ đồ đạc chỉ là “lối sống sạch sẽ”, không phải lối sống tối giản”! <br>
Eva.vn: Phỏng vấn Một “người mẹ tối giản” Ban đầu mọi thứ sẽ vượt ngoài tầm kiểm soát <br>
Barcode: Phỏng vấn 30 phút trò chuyện cùng blogger Chi Nguyễn từ The Present Writer <br>
The Blue Expat: Podcast Phong cách sống tối giản cùng Chi Nguyễn từ The Present Writer <br>
—–<br>

Nếu bạn yêu The Present Writer, hãy ủng hộ để blog có thể tiếp tục phát triển bền vững. Đăng ký nhận newsletter và theo dõi hành trình cuộc sống của tôi qua YouTube, Podcast, Facebook và Instagram.
<br>
Chúc bạn một ngày tốt lành!break

<br>
Be present,
<br>
    <p>Chi Nguyễn</p><br>

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