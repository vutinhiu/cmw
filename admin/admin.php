<?php 
	if(!defined('SECURITY')){
		die('Bạn không có quyền truy cập vào file này!');
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hệ thống Blog</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!-- CK Editor -->
<script src='ckeditor/ckeditor.js' ></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="#"><span>Quản lý</span>Blog</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
					<?php 
                                $sql = "SELECT * FROM user ORDER BY user_id ";
                                $query = mysqli_query($conn, $sql);
                                $row_user = mysqli_fetch_array($query)
                            ?>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
						<a href="index.php?page_layout=edit_user&&user_id=<?php echo $row_user['user_id']; ?>"><?php 
							echo $_SESSION['mail'];
						?></a>
                        <li><a href="logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Đăng xuất</a></li>
					
					</li>
				</ul>
                
			</div>			
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li class=""><a href="index.php?page_layout=category"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Quản lý danh mục</a></li>
			<li class=""><a href="index.php?page_layout=product"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý bài viết</a></li>
			<li class=""><a href="index.php?page_layout=comment"><svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>Quản lý bình luận</a></li>
			<!-- <li><a href="comment.html"><svg class="glyph stroked two messages"><use xlink:href="#stroked-two-messages"/></svg> Quản lý bình luận</a></li>
			<li><a href="ads.html"><svg class="glyph stroked chain"><use xlink:href="#stroked-chain"/></svg> Quản lý quảng cáo</a></li>
			<li><a href="setting.html"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></svg> Cấu hình</a></li> -->
		</ul>

	</div><!--/.sidebar-->
		

	<!-- Master Layout -->
	<?php 
		if(isset($_GET['page_layout'])){
			switch($_GET['page_layout']){
				case "product": include_once('product.php'); break;
				case "add_product": include_once('add_product.php');break;
				case "edit_product": include_once('edit_product.php');break;
				case "category": include_once('category.php'); break;
				case "add_category": include_once('add_category.php');break;
				case "edit_category": include_once('edit_category.php');break;
				
				case "edit_user": include_once('edit_user.php');break;
				case "comment": include_once('comment.php');break;
			}
		}else{
			include_once('dashboard.php');
		}
	?>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
    <script src="js/bootstrap-table.js"></script>
	
</body>

</html>
