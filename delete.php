
<?php
include_once 'db_conn.php';
if(isset($_POST['submit'])){
$id=$_POST['id'];
$sql="delete from persons where id=$id";
$result=mysqli_query($conn,$sql);
header('location:alluser.php?success=deleted successfully');


}
else{
header('location:alluser.php');
}




?>