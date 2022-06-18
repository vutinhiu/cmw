
  

        <div class="row">
        <?php 
            $sql = "SELECT * FROM product ORDER BY prd_id DESC LIMIT 6";
            $query = mysqli_query($conn, $sql);
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
                    <?php }?>
                </div>
