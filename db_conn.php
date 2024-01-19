<?php
 $server = 'localhost';
 $user = 'root';
 $password = '';
  $db_conn = 'persons';
  $conn = mysqli_connect($server,$user,$password,$db_conn);
  if(!$conn){
   echo'not connected';
    }else{
      echo 'connected';
       }
     ?>