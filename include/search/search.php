<?php 
include_once('blog.php');

$keyword = $_POST['keyword']; // aa bb cc 
$arr_key = explode(" ", $keyword); // => [aa] [bb] [cc]
$new_key = "%".implode("%", $arr_key)."%"; // => %aa%bb%cc%

$sql = "SELECT * FROM product WHERE prd_name LIKE '$new_key' LIMIT 9";
$query = mysqli_query($conn,$sql);

// PHÂN TRANG

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
$row_per_page = 3;
$total_row = mysqli_num_rows(mysqli_query($conn,$sql));
$per_row = $page * $row_per_page - $row_per_page;
$total_page = ceil($total_row / $row_per_page);

$list_page = '';
$prev_page = $page - 1;
if($page <= 1){
    $prev_page = 1;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=search&&page='.$prev_page.'">Trang trước</a></li>';

for($i=1; $i <= $total_page; $i++){
    if($i == $page){
        $active = 'active';
    }else{
        $active = '';
    }
    $list_page .= '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=search&&page='.$i.'">'.$i.'</a></li>';
}

$next_page = $page +1;
if($page >= $total_page){
    $next_page = $total_page;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=search&&page='.$next_page.'">Trang sau</a></li>';
?>

<!--	List Product	-->
<div class="products">
    <div id="search-result" style="size:20px ;"><h4> SEARCH RESULTS FOR :  <span><?php echo $keyword; ?></span></h4>   </div>
    <div class="product-list row">
        <?php 
            while($row = mysqli_fetch_array($query)){
        ?>
            <div class="col-md-12" id="col-left">
                        <!-- id="col-left" -->
                        <p id="title"><?php echo $row['prd_name']?></p>
                        <a href="#"><img id="img" class="img-fluid" src="admin/images/<?php echo $row['prd_image']?>" alt=""></a>
                        <p id="detail"><?php echo $row['prd_details']?>...</p>
                        <a href="blog.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>" id="a">[Read more...]</a>
                        <hr>
                    </div>
        <?php        
            }
        ?>
        
    </div>
</div>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <?php echo $list_page; ?> 
    </ul>
</div>
