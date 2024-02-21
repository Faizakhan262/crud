<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post" onsubmit="return showConfirmation()">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddresss" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
                
                <?php
              $conn=mysqli_connect("localhost","root","","crud") or die("connection failed");
              $sql="SELECT * FROM  studentclass";
              $result=mysqli_query($conn,$sql) or die ("query unsuccessful");
              while($row =mysqli_fetch_assoc($result)){
        ?>
        <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>   
    
    
             <?php } ?>   
            </select>
        </div>
        
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<script>
    function showConfirmation() {
        // Display a confirmation dialog
        var confirmed = window.confirm("Are you sure you want to submit the form?");

      
            alert("RECORD ENTERED!");
        
         window.location.href ="index.php";
     
        
    }
    </script>
</body>
</html>
