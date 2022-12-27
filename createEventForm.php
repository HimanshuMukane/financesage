<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>SAKEC-AA-Alumni Association</title>
  <title>SAKEC-AA-</title>

</head>

<body>
  <form method="POST">
    <div class="w3-container">
      <div class="content">
        <!--body content holder-->
        <div class="container">
          <div class="col-md-6 col-md-offset-3">
            <label>Blog Name:</label><br>
            <input type="text" name="blog_title" required class="form-control"><br><br>

            <label>Blog about:</label><br>
            <input type="text" name="about" required class="form-control"><br><br>

            <label>Upload Path to Image:</label><br>
            <input type="text" name="img_link" required class="form-control"><br><br>

            <label>Blog title_2</label><br>
            <input type="text" name="title_2" required class="form-control"><br><br>

            <label>Blog description_2</label><br>
            <input type="text" name="description_2" required class="form-control"><br><br>

            <button type="submit" name="update" class="btn btn-default pull-right">Create Blog <span class="glyphicon glyphicon-send"></span></button>

            <a class="btn btn-default navbar-btn" href="adminPage.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a>


          </div>
        </div>
      </div>
  </form>



</body>

<?php

if (isset($_POST["update"])) {
    $blog_title=$_POST['blog_title'];
    $about=$_POST['about'];
    $img_link=$_POST['img_link'];
    $title_2=$_POST['title_2'];
    $description_2=$_POST['description_2'];
    if(!empty($blog_title)){
    include 'classes/db1.php';

    $INSERT = "INSERT INTO events (blog_title, about, img_link, title_2, description_2)
    VALUES ('$blog_title', '$about', '$img_link', '$title_2', '$description_2')";
    
if ($con->query($INSERT) === True) {
      echo "<script>
          alert('Event Inserted Successfully!');
          window.location.href='adminPage.php';
          </script>";
    } else {
      echo "<script>
          alert('Event already exsists!');
          window.location.href='createEventForm.php';
          </script>";
    }

    $con->close();
  } else {
    echo "<script>
      alert('All fields are required');
      window.location.href='createEventForm1.php';
      </script>";
}}
?>

</html>
