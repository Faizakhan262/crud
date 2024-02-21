<?php include 'header.php';
echo "<div class='alert alert-success'>
<strong>Success!</strong> Record Entered.
</div>";


$stu_name=$_POST['sname'];
$stu_address=$_POST['saddresss'];
$stu_class=$_POST['sclass'];



$conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
$sql="INSERT  INTO student(sname,saddresss,sclass) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}')";
$result=mysqli_query($conn,$sql) or die ("query unsuccessful");
header("Location: http://localhost/crud/index.php");
// mysqli_close($conn);
    ?>
