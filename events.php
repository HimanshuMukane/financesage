<div class="card">
    <div class="img">
        <img src="images/<?php echo $row['img_link']; ?>" style="height: auto;" class="img-responsive">
    </div>
    <div class="info">
        <?php echo $row['blog_title'] . '<br>'; ?>
        <?php echo 'Image Link:' . $row['img_link'] . '<br>'; ?>
        <?php echo 'title_2:' . $row['title_2'] . '<br>';?>
        <?php $id=$row['blog_id']; 
        echo 
        '<a class="btn btn-default" href="blogdetails.php?id='.$id .'">
            <span class="glyphicon glyphicon-circle-arrow-right">
            </span>View More
        </a>'
        ?>
    </div>
</div>