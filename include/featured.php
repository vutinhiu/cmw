<div class="col-md-12 " id="col-right" style="size:5px">
                        <p id="button-right" > Bài viết mới nhất</p>
                        <ul >
                        <?php 
            $sql = "SELECT * FROM product ORDER BY prd_id DESC LIMIT 6";
            $query = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($query)){
        ?>
                            <li class="nav-link" style="font: size 5px;;"><a href="blog.php?page_layout=product&&prd_id=<?php echo $row['prd_id']?>"><?php echo $row['prd_name']; ?></a> </li>
                            <?php }?>
                        </ul>
                    </div>