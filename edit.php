<?php
  include("db.php");
    $id=$_GET['id'];
  $equery="select * from user where id=$id";
  $rquery=mysqli_query($con,$equery);
  if ($rquery) {
     while ($row=$rquery->fetch_assoc()) {
          $name=$row['name'];
          $email=$row['email'];
          $phone=$row['phone'];
          $address=$row['address'];
     }
  }else {
    echo"
    <script> alert('User Not Edited!..');  </script>
   ";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        #main{
            border:1px solid black;
            align-items: center;
            width: 400px;
            height: 300px;
            margin-left:32% ;
            margin-top: 3%;
        }
        #main form{
            margin-left: 4%;
        }
        #main form button{
            width: 120px;
            height: 50px;
            margin-left: 10%;
        }
        #main form button:hover{
            cursor: pointer;
            background-color: blueviolet;
            color: white;
            border-radius: 12%;
        }


    </style>
</head>
<body>

    <?php
       if (isset($_POST['update'])) {
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
           $address=$_POST['address'];

           $uquery="update user set name='$name', email='$email', phone='$phone', address='$address'";
           $ruquery=mysqli_query($con,$uquery);

           if ($ruquery) {
                header('location:index.php');
           }else{
            echo"
            <script> alert('User Not Edited!..');  </script>
           ";
           }
       }

   ?>
<div id="main">
        <h1>PHP CRUD OPERATION</h1>
       <form action="#" method="post">
            <label>Nmae:</label>
             <input type="text" name="name" value="<?php  echo $name;  ?> "><br><br>
             <label>Email:</label>
             <input type="email" name="email" value="<?php  echo $email;  ?> "><br><br>
             <label>Phone:</label>
             <input type="text" name="phone" value="<?php  echo $phone;  ?> "><br><br>
             <label>Address:</label>
             <input type="text" name="address" value="<?php  echo $address;  ?> "><br><br>
             <button type="submit" name="update">Add User</button>
       </form>
    </div>
</body>
</html>