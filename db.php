<?php
  $host="localhost";
  $user="root";
  $password="";
  $database="crud";

  $con=mysqli_connect($host,$user,$password,$database);

   if ($con) {
       echo"
        <script> alert('Connection Success!..');  </script>
       ";
   }else {
    echo"
    <script> alert('Connection Failed!..');  </script>
   ";
   }

?>