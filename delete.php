<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){
    $conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
    $stu_id=$_GET["s_id"];
   $sql="DELETE FROM student WHERE s_id= {$stu_id}" ;
   $result=mysqli_query($conn,$sql) or die ("query unsuccessful");
//  header("Location:  http//localhost/crud/index.php");
//  mysqli_close($conn);
}
?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action= "<?php echo $_SERVER['PHP_SELF']; ?>" >
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    
</div>
</div>
</body>
</html>
