
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
    <form method="POST">
<label>blog_title</label><br>
    <input type="text" name="blog_title" required class="form-control"><br><br>
    <label>title_2</label><br>
    <input type="text" name="title_2" required class="form-control"><br><br>
    <button type="submit" name="update" class = "btn btn-default ">Update</button>
    </div>
    </div>
    </div>
    </form>
    

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
    $blog_title=$_POST["blog_title"];
    $title_2=$_POST["title_2"];

     $sql="UPDATE events set blog_title='$blog_title',title_2='$title_2' where sid='$id'";
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