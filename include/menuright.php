<div class="col-md-3">
<div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-12 " id="col-right" >
                        <a href="#"><img id="img" class="img-fluid" src="https://i0.wp.com/thepresentwriter.com/wp-content/uploads/2020/07/Chi-Nguyen_The-Present-Writer.jpg?ssl=1" alt=""></a>
                        <p>The Present Writer là “khu vườn xanh yên tĩnh” của Chi Nguyễn—Tiến sĩ Giáo dục tại Mỹ. Đọc thêm về <a href="">Chi & Blog</a></p>
                    </div>
                    <div class="col-md-12 " id="col-right" >
                        <p id="button-right" > Xuất bản</p>
                        <p><a href="">“Một cuốn sách về Chủ nghĩa tối giản”</a> là cuốn sách đầu tay của Chi về đề tài tối giản hóa cuộc sống. Sách xuất bản lần đầu vào năm 2018 và tái bản mới nhất năm 2022.</p>
                    </div>
                    <div class="col-md-12 " id="col-right">
                        <p>5 bước xây dựng một blog thành công & 1 khoá học làm blog miễn phí. Xem tại <a href=""> đây</a></p>
                    </div>
                    <div class="col-md-12 " id="col-right">
                        <p id="button-right" > Tìm kiếm</p>
                        <form class="form-inline ">
                          
                            <input class="form-control mr-sm-2" type="search" placeholder="Search this website" aria-label="Search">
                            
                          </form>
                    </div>
                    <div class="col-md-12 " id="col-right">
                        <p id="button-right" > Đề tài</p>
                        
                        <select class="border" >
							<?php
                            $sql = "SELECT * FROM category ORDER BY cat_id ASC";
                             $query = mysqli_query($conn,$sql);
                            while($row_cat = mysqli_fetch_array($query)){
							?>
							<option value="blog.php?page_layout=category&&cat_id=<?php echo $row_cat['cat_id'] ?>"><?php echo $row_cat['cat_name'] ?></option>
							<?php
							 }
							?>
						</select>
                  
                    </div>
            <!--  XEM XÉT cột hàng bên trái -->
             <!-- col.// -->
                    </div>
                    
                    <div class="col-md-12 " id="col-right">
                     <p id="button-right" > Email subscription</p>
                        <form role="form" id="buyNow" method="post">
                        <p>Nhận bài viết mới qua email</p>
                       <?php include_once('include/sendmail.php')?>
                       </form>
                    </div>
                     
                     <div class="col-md-12" id="col-right">
                        <p id="button-right" > Kết nối</p>
                           <div style="display: flex;">
                            <a href="index.php"><img id="connect"src="images/wifi.png" alt=""></a>
                            <a  href="https://follow.it/thepresentwriter?action=followPub"><img id="connect" src="images/email.png" alt=""></a>
                            <a href="https://www.facebook.com/PresentWriter/"><img id="connect" src="images/facebook.png" alt=""></a>
                            <a href=""><img id="connect"src="images/insta.png" alt=""></a>
                           </div>
                    </div>
                    <div class="col-md-12 text-center" id="col-right">
                       <div class="text-center">
                            <img style="width: 100%;"src="images/ungdung.png" alt="">
                            <p><a href="#">Ủng hộ</a> để blog tiếp tục hoạt động bền vững, miễn phí và không banner quảng cáo.</p>
                       </div>
                    </div>
                    <div class="col-md-12" id="col-right">
                        <p id="button-right" > instagram</p>
                       <div style="display: flex;" > 
                            <a   class="img-fluid" href="https://www.instagram.com/p/CeybBsfAQYG/"><img id="insta" src="images/insta1.png" alt=""></a>
                           <a   class="img-fluid" href="https://www.instagram.com/p/Ceh17fMrx_Y/"><img id="insta" src="images/insta2.png" alt=""></a>
                       </div>
                           <div style="display: flex;">
                            <a   class="img-fluid" href="https://www.instagram.com/p/CeP4P1jrKKH/"><img id="insta" src="images/insta3.png" alt=""></a>
                            <a   class="img-fluid" href="https://www.instagram.com/p/Cd50LH7rkHk/"><img id="insta" src="images/insta5.png" alt=""></a>
                            </div>
                            <div style="display: flex;">
                                  
                           <a   class="img-fluid" href="https://www.instagram.com/p/Cd9pd9Tg_hL/"><img id="insta" src="images/insta4.png" alt=""></a>
                           <a   class="img-fluid" href="https://www.instagram.com/p/CdruBU4LsiN/"><img id="insta" src="images/insta6.png" alt=""></a>
                            </div>
                           
                           <i class="bi bi-instagram"></i>
                     
                        <a href="https://www.instagram.com/thepresentwriter/" type="button" class="btn btn-dark"><i class="bi bi-instagram"></i>Follow on Instagram</a>
                    </div>
                </div>
</div>