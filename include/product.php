<?php 
    if(isset($_GET['prd_id'])){
        $prd_id = $_GET['prd_id'];
        $sql = "SELECT * FROM product WHERE prd_id = $prd_id";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
    }
?>
<div class="col-md-12">
                <div class="row">
                    <div class="col-md-12" id="col-left">
                        <!-- id="col-left" -->
                        <p id="title"><?php echo$row['prd_name']?></p>
                        <a href="" class="text-center" style="size:10px;"><?php echo$row['prd_content']?></a>
                        <a href="#"><img id="img" class="img-fluid" src="admin/images/<?php echo$row['prd_image']?>" alt=""></a>
                        <p>Chào bạn đọc yêu quý của The Present Writer blog, 
                            Sau rất nhiều thử thách, chờ đợi, và quyết tâm, “Một cuốn sách về Chủ nghĩa tối giản” (Phiên bản 2022) chính thức phát hành !!! 
                        </p>    
                        
                        <strong style="color: #993300;"><?php echo $row['prd_status']?></strong>
                        </br>
                        <ul>
                            <li><a href="">Shopee</a></li>
                            <li><a href="">Tiki </a></li>
                            <li><a href="">The Present Writer Shop</a></li>
                        </ul>
                        </br>
        
                        <strong style="color: #993300;">Bạn đọc tại nước ngoài có thể tham khảo thông tin sau: </strong>
                        </br>
                        <ul>
                            <li>Tại Úc: <a href="">Viet Book Alley </a></li>
                            <li>Tại Nhật: <a href="">iShite, Macawshop </a></li>
                        </ul>
                        </br>
        
                        <strong style="color: #993300;">Ebook & Audibook: </strong>
                        </br>
                        <p>Phiên bản sách điện tử (ebook) và sách nói (audio book) sẽ ra mắt cuối năm 2022 </br>
                        </br>— </br>
                        </br>Quá trình sản xuất, in ấn và phát hành tái bản “Một cuốn sách về Chủ nghĩa tối giản” thực sự là một cuộc hành trình dài và nhiều chông gai — khó khăn tới mức có những lúc mình đã định bỏ cuộc giữa chừng. Nhưng may mắn có gia đình, team The Present Writer, bạn bè làm trong lĩnh vực xuất bản, các bạn điều phối sàn thương mại điện tử, và rất nhiều bạn đọc The Present Writer đã tin tưởng, giúp đỡ và động viên mình để đi tới đích. Mình thực sự biết ơn!
                        Cảm ơn sự chờ đợi và ủng hộ của tất cả mọi người! </br>
            



                        <!--  -->
                        </br>Be present,</br>
                                
                        </br>Chi Nguyễn </p>
                        <hr>
    
                 <div class=" col-md-12 border"  >
            <?php 
            $sql_cmt = "SELECT * FROM comment WHERE prd_id = $prd_id";
            $query_cmt = mysqli_query($conn,$sql_cmt);
            while($row_cmt = mysqli_fetch_array($query_cmt)){
            ?>
            <div class="comment-item">
                <ul>
                    <li><b><?php echo $row_cmt['comm_name']; ?></b></li>
                    <li><?php echo $row_cmt['comm_date']; ?></li>
                    <li><p><?php echo $row_cmt['comm_details']; ?></p></li>
                    <li > <a href="#"> REPLY</a></li>
                </ul>
            </div>
            <?php } ?>
          </div>
                          <!-- comment -->
           <?php 
        if(isset($_POST['sbm'])){
            $prd_id = $prd_id;
            $comm_name = $_POST['comm_name'];
            $comm_mail = $_POST['comm_mail'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $comm_date = date("Y-m-d H:i:s");
            $comm_details = $_POST['comm_details'];
            $sql = "INSERT INTO comment (prd_id, comm_name, comm_mail, comm_date,comm_details) VALUES ($prd_id,'$comm_name','$comm_mail','$comm_date','$comm_details')";
            $query = mysqli_query($conn,$sql);
        }
    ?>
        <div class=" col-md-12 " style=" padding-top:40px">
            <h4>LEAVE A REPLY</h4>
            <form method="post">
                <div class="form-group">
                <div class="form-group">
                    <label>Comment *:</label>
                    <textarea name="comm_details"  class="form-control"></textarea>
                </div>
                    <label>Name :</label>
                    <input name="comm_name" required type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="comm_mail" required type="email" class="form-control" id="pwd">
                </div>
                
                <button type="submit" name="sbm" class="btn btn-light ">POST COMMENT </button>
            </form>
        </div>
 </div>
    </div>
    </div>

            