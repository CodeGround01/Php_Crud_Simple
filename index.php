<?php

 include("db.php");

   if (isset($_POST['submit'])) {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $address=$_POST['address'];

        $query="insert into user(name,email,phone,address) values('$name', '$email', '$phone', '$address')";
        $rquery=mysqli_query($con,$query);

        if ($rquery) {
            echo"
            <script> alert('User Added Successfully!..');  </script>
           ";
        }else {
            echo"
            <script> alert('Some error!..');  </script>
           ";
        }
   }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD OPERATION</title>
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
    <div id="main">
        <h1>PHP CRUD OPERATION</h1>
       <form action="#" method="post">
            <label>Nmae:</label>
             <input type="text" name="name"><br><br>
             <label>Email:</label>
             <input type="email" name="email"><br><br>
             <label>Phone:</label>
             <input type="text" name="phone"><br><br>
             <label>Address:</label>
             <input type="text" name="address"><br><br>
             <button type="submit" name="submit">Add User</button>
       </form>
    </div>
    <hr>
    <table style=" width:80%; border:1; text-align:center;"; >
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Operations</th>
         </tr>
         <?php
           $squery="select * from user";
           $rsquery=mysqli_query($con,$squery);
           if ($rsquery->num_rows>0) {
                while ($row =$rsquery->fetch_assoc()) { 
                    $id = $row['id']; 
         ?>
         <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['email']; ?></td>
            <td><?php  echo $row['phone']; ?></td>
            <td><?php  echo $row['address']; ?></td>
            <td><a href="edit.php?id=<?php echo $id;  ?>">EDIT</a></td>
            <td><a href="delete.php?id=<?php echo $id;  ?>">DELETE</a></td>
         </tr>
         <?php      } }  ?>
    </table>
</body>
</html>