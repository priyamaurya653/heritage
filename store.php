    <?php
    include_once "db_conn.php";
    if(isset($_POST['submit'])){
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     $password = $_POST['password'];
                     $phone = $_POST['phone'];   
          if($email == '' || $password == ''){ 
          header('location:register.php? error=please fill required fields');
          }else{
                 $sql = "select * from persons where email = '$email'";   
                 $result = mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result)>0){
                 header('location:register.php?error = user already exists');
                   }else{
                    echo $insert = "insert into persons(name,email,password,phone)values('$name','$email','$password',$phone)";
   
                         mysqli_query($conn,$insert);
                         header('location:login.php?success = user registerd');
           }
     }

             }else{

                 header(location:register.php);
    
               }
?>
