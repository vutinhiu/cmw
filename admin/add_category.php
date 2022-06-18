<?php 
	if(!defined('SECURITY')){
		die('Bạn không có quyền truy cập vào file này!');
	}
    if(isset($_POST['sbm'])){
        $cat_name = $_POST['cat_name'];
        $sql = "INSERT INTO category (cat_name) VALUES ('$cat_name')";
        $query = mysqli_query($conn, $sql);
        header("location: index.php?page_layout=category");
    }
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="index.php?page_layout=category">Quản lý mục lục</a></li>
				<li class="active">Thêm mục lục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm mục lục</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                        	
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Tên mục lục:</label>
                                    <input required type="text" name="cat_name" class="form-control" placeholder="Tên mục lục...">
                                </div>
                                <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </form>
                        </div>    
                    </div>
                </div>
            </div><!-- /.col-->
        </div>    
	</div>	<!--/.main-->	