
  <?php  if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $row_per_page = 5; //so ban ghi hien thị
    $per_row = $page * $row_per_page - $row_per_page; //tìm bị trí bắt đầu bản ghi
    echo $total_row = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM product")); //lấy ra tổng bản ghi
    $total_page = ceil($total_row/$row_per_page); //Tính số page hiển thị

//PHÂN TRANG    

    $list_page = '';
    //nút pre page
    $page_prev = $page - 1;
    if($page_prev <=0 ){
        $page_prev = 1;
    }
    $list_page .= '<li class="page-item"><a class="page-link" href="blog.php?page_layout=menuleft&page='.$page_prev.'">&laquo;</a></li>';
    //đánh dấu trang 
    for($i = 1; $i <= $total_page; $i++){
        if($i == $page){
            $active = 'active';
        }else{
            $active = '';
        }
        $list_page .= '<li class="page-item '.$active.'"><a class="page-link" href="blog.php?page_layout=menuleft&&page='.$i.'">'.$i.'</a></li>';
    }
    //nút next page
    $page_next = $page + 1;
    if($page_next > $total_page){
        $page_next = $total_page;
    }
    $list_page .= '<li class="page-item"><a class="page-link" href="blog.php?page_layout=menuleft&page='.$page_next.'">&raquo;</a></li>';

?>

        <div class="row">
        <?php 
            $sql = "SELECT * FROM product ORDER BY prd_id DESC LIMIT ".$per_row.' , '.$row_per_page;
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
        ?>
                    <div class="col-md-12 border pt-20" id="col-left" >
                        <!-- id="col-left" -->
                        <?php  if($row['prd_status']==1){ ?>
                        <p id="title"><?php echo $row['prd_name']?></p>
                        <p class="text-center"><?php echo $row['prd_content']?>...</p> <br>
                        <a href="#"><img id="img" class="img-fluid" src="admin/images/<?php echo $row['prd_image']?>" alt=""></a>
                        <a href="blog.php?page_layout=product&&prd_id=<?php echo $row['prd_id']; ?>" id="a">[Read more...]</a>
                        <br>
                    
                    <?php 
                                                }else{ 
                                                    echo '<div class="col-md-12" id="col-left"> </div>';
                                                }
                                            ?>
                                            </div>
                    <?php }?>
                   
                  
                </div>
                <div class="panel-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                               <?php echo $list_page; ?> 
                            
                                
                            </ul>
                        </nav>
                    </div>
