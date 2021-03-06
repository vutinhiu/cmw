<?php
if (!defined('SECURITY')) {
	die('Bạn không có quyền truy cập vào trang này!');
}
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$row_per_page = 4;
$per_row = $page * $row_per_page - $row_per_page;
echo $total_rows = mysqli_num_rows(mysqli_query($conn, 'SELECT * FROM comment'));
$total_page = ceil($total_rows / $row_per_page);

$list_page = '';
$page_prev = $page + 1;
if ($page_prev <= 0) {
	$page_prev = 1;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=comment&page=' . $page_prev . '">&laquo;</a></li>';
for ($i = 1; $i <= $total_page; $i++) {
	if ($i == $page) {
		$active = 'active';
	} else {
		$active = '';
	}
	$list_page .= '<li class="page-item ' . $active . '"><a class="page-link" href="index.php?page_layout=comm,ent&page=' . $i . '">' . $i . '</a></li>';
}
$page_next = $page + 1;
if ($page_next > $total_page) {
	$page_next = $total_page;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=comment&page=' . $page_next . '">&raquo;</a></li>';
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Quản lý bình luận</li>
		</ol>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý bình luận</h1>
		</div>
	</div>
	<!--/.row-->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table data-toolbar="#toolbar" data-toggle="table">

						<thead>
							<tr>
								<th data-field="id" data-sortable="true">ID</th>
								<th>Người bình luận</th>
								<th>Mail</th>
								<th>Nội dung</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT * FROM comment ORDER BY comm_id ASC LIMIT " . $per_row . ',' . $row_per_page;
							$sql_cat = mysqli_query($conn, $sql);
							while ($row_cat= mysqli_fetch_array($sql_cat)) {
							?>
								<tr>
									<td style=""><?php echo $row_cat['comm_id']; ?></td>
									<td style=""><?php echo $row_cat['comm_name']; ?></td>
									<td style=""><?php echo $row_cat['comm_mail']; ?></td>
									<td style=""><?php echo $row_cat['comm_details']; ?></td>
                                    <td class="form-group">
                                    <a type="button" class="btn btn-danger" data-toggle="modal" data-href-id="del_comment.php?comm_id=<?php echo $row_cat['comm_id'];?> "data-name-id="Người bình luận  : <?php echo $row_cat['comm_name'];?> "data-target="#confirmDialod" style="border:none; outline:none;">
                                        <i class="glyphicon glyphicon-remove border-0"></i>
                                    </a> 

                                    <!-- Modal -->
                                    <div class="modal fade" id="confirmDialod" tabindex="-1" role="dialog"
                                        aria-labelledby="confirmDialodTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document"
                                            style="background-color: #fff;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDialodTitle"></h5>
                                            </div>
                                            <div class="modal-body">
                                                Bạn chắc chắn muốn xóa mục lục này không?
                                            </div>
                                            <div class="modal-footer">
                                                <a href="#" type="button" class="btn btn-primary" id="deletes">Có</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                                                <script>
                                                    $('#confirmDialod').on('show.bs.modal', function (e) {
                                                        var nameProduct = $(e.relatedTarget).data('name-id'); //lấy dữ liệu truyền vào từ data-name-id của thẻ html
                                                        document.getElementById('confirmDialodTitle')
                                                            .innerHTML = nameProduct; //gán giá trị vào thẻ html có id tương ứng
                                                        var hrefDelete = $(e.relatedTarget).data('href-id');//lấy dữ liệu truyền vào từ data-href-id của thẻ html
                                                        $('#deletes').attr('href', hrefDelete); // truyền dữ liệu vào thuộc tính href của thẻ có id là deletes
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                        </td>
                                    </tr>
							<?php
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<?php echo $list_page; ?>
					
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->