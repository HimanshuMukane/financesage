<?php require 'classes/db1.php';
$id=$_GET['id'];

$sql="delete from events where blog_id='$id';";
$sql.="delete from event_info where blog_id='$id';";
$sql.="delete from staff_coordinator where blog_id='$id';";
$sql.="delete from student_coordinator where blog_id='$id';";
$sql.="delete from registered where blog_id='$id'";
if($con->multi_query($sql) === True)
{
    echo"<script>
    alert('Event Deleted Successfully');
    window.location.href='adminPage.php';
            </script>";
}
else{
    echo "Error deleting record".$con->error;
}
$con->close();
?>