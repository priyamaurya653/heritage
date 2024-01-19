  <?php
   include_once"db_conn.php";
   session_start();
   if(isset($_SESSION['id']) && isset($_SESSION['email'])){
      $sql = "select * from persons where email !='".$_SESSION['email']."'";
     $result = mysqli_query($conn,$sql);
    ?>
<!Doctype html>
 <html>
 <head>
 <title>all user</title>
 </head>
  <style>
  .container{
  width:100%;
  height:700px;
  background-color:pink;
} 
 </style>

 <body>
 <div class = "container">
 <table>
 <thead>
  <tr>
    <th>Sr.no</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
  
    <th>Action</th></tr>
  </thead>
   <tbody>
 <?php
      $i = 0; 
      while($row = mysqli_fetch_assoc($result)){
       ?>
       <tr>
   <td><?php echo ++$i; ?></td>
   <td><?php echo $row['name'] ?>&nbsp&nbsp</td>
   <td><?php echo $row['email'] ?>&nbsp&nbsp</td>
   <td><?php echo $row['phone'] ?>&nbsp&nbsp</td>
       <td classs = "d-flex">
       <a href = "edituser.php?id=<?php echo $row
       ['id']?>" class='btn'>Edit user</a><br>
        <a href = "showuser.php?id=<?php echo $row
         ['id']?>"class='btn'>View user</a>
          <form action = "delete.php"method = "post">
          <input type = "hidden"name = "id" value ="<?php 
          echo $row['id']?>">
           <input type = "submit"class = "btn"
            name = "submit">
             </form>
              </td>
              </tr>
               <?php }?>
                </tbody>
                 </table>
                 </div>

 </body>
 </html>
 <?php  
  }else{
    header('location:login.php');
  }
  ?>
