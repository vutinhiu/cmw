<?php 
    if(isset($_GET['cat_id'])){
        $cat_id = $_GET['cat_id'];
        $sql = "SELECT * FROM category WHERE cat_id = $cat_id ";
        $query = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($query);
    }
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $row_per_page = 3; // 1 trang hiển thị ? bản ghi
    $per_row = $page * $row_per_page - $row_per_page; // phần tử đầu trang
    $total_row = mysqli_num_rows(mysqli_query($conn,$sql)); // số bản ghi
    $total_page = ceil($total_row / $row_per_page); // số trang
    
    
    //PHÂN TRANG
    
    $list_page = '';
    $prev = $page - 1;
    if($page <= 1){
        $prev = 1;
    }
    $list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=category&&
    cat_id='.$cat_id.'&&page='.$prev.'">&laquo;</a></li>';

    for($i=1;$i<=$total_page;$i++){
        if($i == $page){
            $active = 'active';
        }else{
            $active = '';
        }
        $list_page .= '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=category&&
        cat_id='.$cat_id.'&&page='.$i.'">'.$i.'</a></li>';
    }

    $next = $page + 1;
    if($next >= $total_page){
        $next = $total_page;
    }
    $list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=category&&
    cat_id='.$cat_id.'&&page='.$next.'">&raquo;</a></li>';

?>
<div class="row">
        <?php 
       $sql_prd = "SELECT * FROM product WHERE cat_id = $cat_id ORDER BY prd_id DESC LIMIT 9";
       $query_prd = mysqli_query($conn,$sql_prd);
       while($row_prd = mysqli_fetch_array($query_prd)){
        ?>
                    <div class="col-md-12" id="col-left">
                        <!-- id="col-left" -->
                        <p id="title"><?php echo $row_prd['prd_name']?></p>
                        <a href="#"><img id="img" class="img-fluid" src="admin/images/<?php echo $row_prd['prd_image']?>" alt=""></a>
                        <p id="detail"><?php echo $row_prd['prd_details']?>...</p>
                        <a href="blog.php?page_layout=product&&prd_id=<?php echo $row_prd['prd_id']; ?>" id="a">[Read more...]</a>
                        <hr>
                    </div>
                    <?php }?>
</div>
