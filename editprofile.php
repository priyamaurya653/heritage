<?php
include_once"db_conn.php";
 session_start;
  if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    $sql = "select *from persons where id = '".$_SESSION['id']."'";
     $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
  }   
        ?>
      <!doctype html>
      <html>
     <head>
     <title>page</title>
         </head>
           <style>
           </style>
         <body>
         <div class = "class2"
          <table>
          <form action ="updateprofile.php"method = "POST">
           <input type = "hidden" name = "id" value="<?php echo $row['id']?>">
                  <tr>
          <td>Name</td>
                <td><input type="text" name = "name" value="<?php echo $row['name']?>"></td>
              </tr>
              <tr>
               <td>Email</td>
                 <td><input type = "text" name = "email" value="<?php echo $row['email']?></td>
                   </tr>
<tr>
             <td>phone</td>
              <td><input type = "text" name = "phone" value="<?php echo $row['$phone']?></td>
                 </tr>
                  <tr>
                <td>password</td>
              <td><input type = "text" name = "password" value="<?php echo $row['$password']?></td>
                 </tr>
                   <button type ="submit">submit</button>
                 </div>
  </table>
  <form>
  <?php
 else{
       header('location:profile.php');
          }
                   </body>
          </html>
 
 ?>
          



