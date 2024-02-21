<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
    if(isset($_POST['showbtn'])){
        $conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
        $stu_id=$_POST['s_id']; 
        $sql ="SELECT * FROM student WHERE s_id = {$stu_id}";
        
        $result=mysqli_query($conn,$sql) or die ("query unsuccessful");
        if(mysqli_num_rows($result)> 0){
            while($row=mysqli_fetch_assoc($result)){
    
    
       ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="s_id"  value="<?php echo $row['s_id'] ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname'] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddresss" value="<?php echo $row['saddresss'] ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <select name="sclass" value="<?php echo $row['sclass'] ?>">
            <option value="" selected disabled>Select Class</option>
            <option value="1">BCA</option>
            <option value="2">BSC</option>
            <option value="3">B.TECH</option>
        </select>
        </div>
       
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
}
}
}
?>
</div>
</div>
</body>
</html>
