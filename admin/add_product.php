<?php 
if(!defined('SECURITY')){
    die('Bạn không có quyền truy cập vào file này');
}
if(isset($_POST['sbm'])){
    $prd_name = $_POST['prd_name'];

    $prd_content = $_POST['prd_content'];
    //upload file image
    $prd_image = $_FILES['prd_image']['name'];

    if(($_FILES['prd_image']['type'] == 'image/jpg') || ($_FILES['prd_image']['type'] == 'image/png')){
        if($_FILES['prd_image']['size'] > 10240000){
            $error = "Dung lượng quá 100KB, upload lại đê!";
        }else{
            $url = "images/".$_FILES['prd_image']['name'];
            if(file_exists($url)){
                $num = 0;
                $info = pathinfo($url);
                while(file_exists($url)){
                    $num++;
                    $prd_image = $info['filename'].'-'.$num.$info['extension'];
                    $url = "images/".$prd_image;
                }
            }else{
                $prd_image = $_FILES['prd_image']['name'];
            }
            move_uploaded_file($_FILES['prd_image']['tmp_name'], 'images/'.$prd_image);
            $cat_id = $_POST['cat_id'];
            $prd_status = $_POST['prd_status'];
            if(isset($_POST['prd_featured'])){
                $prd_featured = 1;
            }else{
                $prd_featured = 0;
            }
            $prd_details = $_POST['prd_details'];
            $sql = "INSERT INTO product (prd_name,  prd_content, prd_image, cat_id, prd_status, prd_featured, prd_details) VALUES ('$prd_name',  '$prd_content', '$prd_image', $cat_id, $prd_status, $prd_featured, '$prd_details')";
            $query = mysqli_query($conn,$sql);
            header("location: index.php?page_layout=product");
        }
    }else{
        $error = "Chỉ hỗ trợ định dạng JPG và PNG";
    }

    // 524
    // if($prd_image > 5242880){
    //     echo "File bạn upload không được quá 5MB";
    // }else{
    // }

    
}
?>    
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý bài viết</a></li>
            <li class="active">Thêm bài viết</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm bài viết</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên bài viết</label>
                                <input required name="prd_name" class="form-control" placeholder="">
                            </div>                        
                            <div class="form-group">
                                <label>Tình trạng</label>
                                <input required name="prd_content" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh bài viết</label>
                                <div style="position: relative;">
                                    <input type="file" style="width: 7.7rem;" id="file" onchange="readURL(this);" require name="prd_image">      
                                    <div id="alert" style="position:absolute; top: 5%; left: 7.7rem;"><?php if(isset($error)) {echo $error;} ?></div>
                                </div>
                                </br>
                                <div id="imgHolder">
                                <script>
                                    function readURL(input){
                                        if(input.files && input.files[0]){
                                            //KIểm tra định dạng file
                                            var $type = input.files[0].type,    // type: trả về định dạng dạng image/png || ... 
                                                $extension = $type.split('/').pop().toLowerCase();  //split : cut 1 chuỗi thành 1 mảng dựa vào dấu /  ex: images/a.JPG => a.jpg
                                            if($extension == 'png' || $extension == 'jpg'){
                                                //Kiểm tra kích thước file trước khi upload
                                                var $size = input.files[0].size;
                                                if($size > 10240000){
                                                    document.getElementById('imgHolder').innerHTML = '';
                                                    document.getElementById('alert').innerHTML = 'Xin lỗi kích thước file quá lớn( lớn hơn 100MB)!';
                                                }else{
                                                    document.getElementById('alert').innerHTML = '';
                                                    document.getElementById('imgHolder').innerHTML = '<img id="imgPreview" src="images/Xiaomi-Mi-A1-Gold.png">';
                                                    //Xem ảnh trước khi upload
                                                    var reader = new FileReader();
                                                    reader.onload = function(e){
                                                        $('#imgPreview').attr('src', e.target.result);
                                                    }
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }else{
                                                document.getElementById('imgHolder').innerHTML = '';
                                                document.getElementById('alert').innerHTML = 'Xin lỗi, định dạng hiện không được hỗ trợ (chỉ hỗ trợ JPG hoặc PNG)!';
                                            }
                                        }
                                    }
                                </script>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="cat_id" class="form-control">
                                    <?php 
                                        $sql_cat = "SELECT * FROM category ORDER BY cat_id ASC";
                                        $query_cat = mysqli_query($conn,$sql_cat);
                                        while($row_cat = mysqli_fetch_array($query_cat)){
                                    ?>
                                    <option value="<?php echo $row_cat['cat_id']; ?>"><?php echo $row_cat['cat_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="prd_status" class="form-control">
                                    <option value=1 selected>Đã duyệt</option>
                                    <option value=0>Chờ duyệt</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Bài viết nổi bật</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="prd_featured" type="checkbox" value=1>Nổi bật
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả bài viết</label>
                                <textarea required name="prd_details" id="prd_details" class="form-control" rows="3"></textarea>
                                <script>CKEDITOR.replace('prd_details');</script>
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                    </form>
                </div> <!-- /panel-body -->
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>	<!--/.main-->	