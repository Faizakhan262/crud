<?php include 'header.php';
 $stu_id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="DELETE FROM student WHERE s_id= {$stu_id}" ;
$result=mysqli_query($conn,$sql) or die ("query unsuccessful");
header("Location: http://localhost/crud/index.php");
mysqli_close($conn);
echo "Record Deleted"
?>