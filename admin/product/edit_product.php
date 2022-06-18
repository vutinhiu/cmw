<?php 
if (!defined('SECURITY')) {
	die('Bạn không có quyền truy cập vào trang này!');
}
    if(isset($_GET['prd_id'])){
        $prd_id = $_GET['prd_id'];
    }
    $sql = "SELECT * FROM product WHERE prd_id = $prd_id";

    $query = mysqli_query($conn,$sql);
    $row_pro= mysqli_fetch_array($query);

    if (isset($_POST['sbm'])){
        $prd_name = $_POST['prd_name'];
        $prd_details = $_POST['prd_details'];
        $prd_content = $_POST['prd_content'];
        if($_FILES['prd_image']['name']==''){
            $prd_image = $row['prd_image'];
        }else{
            $prd_image = $_FILES['prd_image']['name'];
        $tmp_name = $_FILES['prd_image']['tmp_name'];
        move_uploaded_file($tmp_name,'images/'.$prd_image);
        }
        $cat_id = $_POST['cat_id'];
        $prd_status = $_POST['prd_status'];
        if(isset($_POST['cat_featured'])){
            $prd_featured = $_POST['prd_featured'];
        }else{
            $prd_featured = 0;
        }
        $sql_update = "UPDATE product SET prd_name='$prd_name',  prd_image='$prd_image', cat_id='$cat_id', prd_status='$prd_status', prd_featured='$prd_featured',prd_details='$prd_details',prd_content='$prd_content' WHERE prd_id='$prd_id'";
        mysqli_query($conn,$sql_update);
        header("location: index.php?page_layout=product");
    }
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
                <li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="index.php?page_layout=product">Quản lý bài viết</a></li>
				<li class="active">Bài viết : <?php echo $row_pro['prd_name']; ?></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài viết : <?php echo $row_pro['prd_name']; ?></h1>
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
                                        <input type="text" name="prd_name" required class="form-control" value="<?php echo $row_pro['prd_name']; ?>"  placeholder="">
                                    </div>                           
                                  
                                    <div class="form-group">
                                            <label>Nội dung bài viết</label>
                                            <textarea name="prd_content" required class="form-control" rows="3"value="<?php echo $row_pro['prd_content']; ?>"></textarea>
                                            <script>CKEDITOR.replace('prd_content');</script>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>Ảnh bài viết</label>
                                        <input type="file" name="prd_image" >
                                        <br>
                                        <div>
                                            <img src="images/<?php echo $row_pro['prd_image'];?>" value="images/<?php echo $row_pro['prd_image']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Danh mục</label>
                                        <select name="cat_id" class="form-control">
                                        <?php 
                                            $sql = "SELECT * FROM category ORDER BY cat_id DESC";
                                            $query = mysqli_query($conn,$sql);
                                            while($row_cat = mysqli_fetch_array($query)){
                                        ?>
                                            <option <?php if($row_cat['cat_id']==$row_cat['cat_id']){echo 'selected';}?>  value="<?php echo $row_cat['cat_id']; ?>"><?php echo $row_cat['cat_name'] ?>
                                            </option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="prd_status" class="form-control">
                                            <option <?php if($row_pro['prd_status']==1){echo "selected";} ?> value=1>Đã duyệt</option>
                                            <option <?php if($row_pro['prd_status']==0){echo "selected";} ?> value=0>Chờ duyệt</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Bài viết nổi bật</label>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if($row_pro['prd_featured'] == 1){echo 'checked';} ?> name="prd_featured" type="checkbox" value=<?php echo $row_pro['prd_featured']; ?>>Nổi bật
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label>Mô tả bài viết</label>
                                            <textarea name="prd_details" required class="form-control" rows="3"></textarea>
                                            <script>CKEDITOR.replace('prd_details');</script>
                                    </div>
                                    <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->
		
	</div>	<!--/.main-->	