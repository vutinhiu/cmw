<div id="comments-list" class="row">
        <div class=" col-md-12 ">
            <?php 
            $sql_cmt = "SELECT * FROM comment WHERE prd_id = $prd_id";
            $query_cmt = mysqli_query($conn,$sql_cmt);
            while($row_cmt = mysqli_fetch_array($query_cmt)){
            ?>
            <div class="comment-item">
                <ul>
                    <li><b><?php echo $row_cmt['comm_name']; ?></b></li>
                    <li><?php echo $row_cmt['comm_date']; ?></li>
                    <li><p><?php echo $row_cmt['comm_details']; ?></p></li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>