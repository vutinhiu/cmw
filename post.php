
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8"/> <!--cài charset về utf8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--chỉnh khu vực hiển thị theo kích thước của thiết bị -->
    <title>Website của nhóm</title>
    <link rel="stylesheet" href="css/style.css">     
    <link rel="stylesheet" href="css/bootstrap.css">   
    <link rel="stylesheet" href="css/bootstrap.css.map">   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">        
</head>    
<body>        
    <div class="container">
    
        <div class="row" id="body">
                <?php include_once('include/product.php')?>
            <div class="col-md-3">
            <?php include_once('include/menuright.php'); ?>
            </div>
        </div>
    </div>


    
</body>
</html>

