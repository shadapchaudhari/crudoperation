<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id='$id'";

    $result=mysqli_query($connection,$sql);
    if($result){
        header ('location:table.php');
    }else{
        die(mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label >Name</label>                
    <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label >Email</label>                
    <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
  </div>
  <div class="mb-3">
    <label >mobile</label>                
    <input type="text" class="form-control" placeholder="Enter your number" name="mobile" value=<?php echo $mobile;?>>
  </div>
  <div class="mb-3">           
    <label >Password</label>                
    <input type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
    
</body>
</html>