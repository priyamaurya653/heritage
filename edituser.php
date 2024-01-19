    <?php
    include_once"db_conn.php";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    $sql = "select *from persons where id = '".$_GET['id']."'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
  }
    ?>
   <!Doctype html>
   <html>
    <head>
    <title>edit user</title>
</head>
      <style>
      .class{
      width:100%;
      height:100px;
      background-color:lightgreen;
        }
      </style>
   
      <?php
      if(isset($_GET['error'])){
         echo $_GET['error']; 
         }
           ?>
        <body>
      <div class = "class">
     <form action = "update.php" method = "post">
     <input type = "hidden" name = "id" value ="<?php echo $row['id'] ?>">
     <input type = "text" name = "name" value ="<?php echo $row['name'] ?>">
     <input type = "text" name = "email" value ="<?php echo $row['email'] ?>">
     <input type = "text" name = "phone" value ="<?php echo $row['phone'] ?>">
     <button type = "sumbit">sumbit</button>
             </form>
             </div>
          </body>
        </html>
      