 <?php
 include_once"db_conn.php";
 session_start();
 if(isset($_SESSION['id']) && isset($_SESSION['email'])){
      $sql = "select * from persons where email ='".$_SESSION['email']."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
?>
     <h1>welcome,<?php echo $_SESSION['email']; ?></h1>
     <h2><?php echo $row['name'] ?></h2>
     <h2><?php echo $row['phone'] ?></h2>
           <?php
     }else{
            header('location:login.php');
}
?>