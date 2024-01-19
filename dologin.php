  <?php
  include_once "db_conn.php";
  session_start();
  if(isset($_POST['submit'])){
                     $email = $_POST['email'];
                     $password = $_POST['password']; 
          if($email== '' || $password== ''){ 
          header('location:login.php?error=please fill required fields');
 }else{
                 $sql = "select *from persons where email = '$email'";
                 $result = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result)>0){
                 $row = mysqli_fetch_assoc($result);
                 if($email === $row['email'] && $password === $row['password']){
                     $_SESSION['id']= $row['id'];
                     $_SESSION['email'] = $row['email']; 
                       header('location:dashboard.php');
   }else{
      header('location:login.php?error = credentials not matched');
 }
  }else{
         header('location:login.php?error = user does not exits');
  }
}
 }else{
      header("location:login.php");
}
        


?>
