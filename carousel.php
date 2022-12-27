<div class='boxes'>
    <a href='blogdetails.php?<?php echo $row['blog_id']; ?>'>
</a>
</div>

<?php $id=$row['blog_id']; 
        echo 
        '<a href="blogdetails.php?id='.$id .'">'
        ?>
        <img src='images/<?php echo $row['img_link']; ?>'>
        <?php '</a>'
        ?>
