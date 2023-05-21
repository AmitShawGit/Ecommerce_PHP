<?php include 'connection.php';
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $del = "delete from reg where id = '$id' ";
    $deletequery = mysqli_query($con,$del);
    if($deletequery){
        ?>
        <script>
            alert('Deleted successfully');
        </script>
        <?php
        header("location:view-user.php");
     }else{
        ?>
        <script>
            alert('not Deleted')
        </script>
        <?php
    }
}
?>