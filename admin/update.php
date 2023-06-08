<?php include 'connection.php'; ?>
<?php 
 if(isset($_POST['update'])){

   $id = $_POST['id'];
   $uname = $_POST['uname'];
   $unumber = $_POST['unumber'];
   $umail = $_POST['umail'];
    $updatequery = " update reg set name = '$uname',number = '$unumber',email = '$umail' where id = '$id' ";
    $query1 = mysqli_query($con,$updatequery);
    if($query1){
       ?>
       <script>
           alert('updated successfully');
       </script>
       <?php
       header("location:view-user.php");
    }else{
       ?>
       <script>
           alert('not updated')
       </script>
       <?php
    }
 }

 ?>
