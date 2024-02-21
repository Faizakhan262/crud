<?php include 'header.php';
$stu_name=$_POST['sname'];
$stu_address=$_POST['saddresss'];
$stu_class=$_POST['sclass'];
$stu_id=$_POST['s_id'];

echo ("Record updated");
$conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="UPDATE student SET sname ='{$stu_name}', saddresss='{$stu_address}', sclass='{$stu_class}' WHERE s_id ='{$stu_id}'";
$result=mysqli_query($conn,$sql) or die ("query unsuccessful");
header("Location:  http://localhost/crud/index.php");
mysqli_close($conn);
    ?>
