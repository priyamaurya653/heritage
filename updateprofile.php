<?php
 include_once"db_conn.php";
 if(isset($POST["submit"])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $id = $_POST['id'];
  if($email==''){
    header('location:profile.php?error=please fill email');
}
else{
  $sql = "update persons set name = '$name', email = '$email',phone = $phone,
 where id = $id";
  mysqli_query($conn,$sql);
  header('location:profile.php?error=profile successfully');
}
 }else{
    header("location:profile.php");
  }
 ?>
  