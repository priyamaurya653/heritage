<?php
include_once"db_conn.php";
 session_start();
 if(isset($_SESSION['id']) && isset($_SESSION['email'])){
  $sql="select*from persons where email='".$_SESSION['email']."'";
   $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);
?>

<!Doctype html>
<html>
<head>
<title>profile</title>
 </head>
 <style>

  .row1{
 width:80%;
 height:2 00px;
 background-color:#90CAF9;
 margin-left:4%;
float:left;
 }
 
 </style>

 <body>
  
<?php
  if(isset($_GET['error'])){
     echo $_GET['error'];
}
?>

 <div class = "row1">
   <table>
 <tbody>
      <tr>
         <td>Name</td>
          <td><?php echo $row['name'];?></td>
             </tr>
            <tr>
           <td>email</td>
          <td><?php echo $row['email'];?></td>
              </tr>
              <tr>
           <td>phone</td>
            <td><?php echo $row['phone'];?></td>s
           </tr>
           <tr>
            <td>password</td>
           <td><?php echo $row['password'];?></td>
              </tr>
              </tbody>
             </table>

  <form action="editprofile.php" metod="post">
     
<button type = "submit"> submit</button>
</div>
        </form>
 </body>
 </html>
    <?php
         }else{
             header('location:dashboard.php');
}
             ?>

 