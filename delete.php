<?php
 include("db.php");
 $id=$_GET['id'];

 $dquery="delete from user where id='$id'";
 $rdquery=mysqli_query($con,$dquery);

 if ($rdquery) {
     header('location:index.php');
 }else {
    echo"
    <script> alert('Some issue!..');  </script>
   ";
 }



?>