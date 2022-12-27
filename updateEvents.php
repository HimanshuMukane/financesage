
    <?php include 'classes/db1.php';
    $id=$_GET['id'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sanchanala 2k20</title>
        <title></title>
        
    </head>
    <body>
    <div class ="content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
             
        <?php
require 'classes/db1.php';
$id=$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM events WHERE blog_id = $id ");
    ?>       
<?php  
while($row = mysqli_fetch_array($result)){?>
    <form method="POST">
     
    <label>Blog Name:</label><br>
            <input type="text" name="blog_title" value="<?php  echo $row['blog_title'];?>" required class="form-control"><br><br>

            <label>Blog about:</label><br>
            <input type="text" name="about" value="<?php  echo $row['about'];?>" required class="form-control"><br><br>

            <label>Upload Path to Image:</label><br>
            <input type="text" name="img_link" value="<?php  echo $row['img_link'];?>" required class="form-control"><br><br>

            <label>Blog title_2</label><br>
            <input type="text" name="title_2" value="<?php  echo $row['title_2'];?>" required class="form-control"><br><br>

            <label>Blog description_2</label><br>
            <input type="text" name="description_2" value="<?php  echo $row['description_2'];?>" required class="form-control"><br><br>

    <button type="submit" name="update" class = "btn btn-default ">Update</button>
    </div>
    </div>
    </div>
    </form>
    
<?php  }?>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1187734967642566"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-1187734967642566"
     data-ad-slot="6170161910"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>


<?php

 if (isset($_POST["update"]))
 {
     $blog_title=$_POST['blog_title'];
     $about=$_POST['about'];
     $img_link=$_POST['img_link'];
     $title_2=$_POST['title_2'];
     $description_2=$_POST['description_2'];

     $sql="UPDATE events set blog_title='$blog_title',about='$about',img_link='$img_link',title_2='$title_2',description_2='$description_2' where blog_id='$id'";
     if($con->query($sql)===true)
     {
        echo"<script>
        alert(' Updated Successfully');
        window.location.href='adminpage.php';
        </script>";
     }
     else
     {
        echo"<script>
        window.location.href='updateEvents.php';
        </script>";
     }
}
?>