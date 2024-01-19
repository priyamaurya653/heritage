<?php
 include_once"db_conn.php";
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $id = $_POST['id'];

     if($email==""){ 
     header('location:alluser.php?error=please fill email');
}
 else{
  $sql = "update persons set name ='$name',email='$email',phone =$phone where id = $id";
  $result= mysqli_query($conn,$sql);
  header('location:alluser.php?success=update successfully');
  }
}
  else{
   header("location:alluser.php");
  }
 

?>