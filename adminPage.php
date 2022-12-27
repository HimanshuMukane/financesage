<?php
include_once 'classes/db1.php';
$result = mysqli_query($con,"SELECT * FROM events");
?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sanchanala 2k20</title>
</head>
    
    <body>
            <?php
if (mysqli_num_rows($result) > 0) {
?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            
                            <th>blog_id</th>
                            <th>img_link</th>
                            <th>blog_title</th>
                            <th>title_2</th>
                            <th>description_2</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     $i=0;
                     while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                            <td><?php echo $row["blog_id"]; ?></td>
                            <td><?php echo $row["img_link"]; ?></td>
                            <td><?php echo $row["blog_title"]; ?></td>
                            <td><?php echo $row["title_2"]; ?></td>
                            <td><?php echo $row["description_2"]; ?></td>
                            <td> <?php echo '<a  href="updateEvents.php?id='.$row['blog_id'].'" class = "btn btn-default"> Update</a>'?></td>
                            <td> <?php echo '<a class="delete" href="deleteEvent.php?id='.$row['blog_id'].'">Delete</a> '?></td>
                           
                        </tr>
                        <?php
                        $i++;
                        }
                        ?>
                        </tbody> 
                </table>
<?php
}

?>             
                <a class="btn btn-default" href = "createEventForm.php">Create Blog</a><!--register button-->
            </div>
        </div>
        
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
