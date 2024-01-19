<!Doctype html>
 <html>
 <head>
 <title>my text</title>
 <style>
 .class1{
  width:50%;
  height:500px;
  background-color:#80CBC4;
  margin-left:1%; 
   padding-left:4%;
  }
  input[type= text], input[type=text]
  input[type=text], input[type=text] {
  width: 60%;
  padding: 12px ;                  
  background: #f1f1f1;
  margin-top: 1%;
  margin-left: 1%;
 background-color:#EDE7F6;
  }
 h1{
 text-align:center;
 }
  button{
  background-color:#1B5E20;
  color: white;
  padding: 14px 20px;
  margin-left:1%;
  border: none;
  text-align:center;
  width: 65%;
  }
  p{
  text-align:center;
 }
 </style>
 </head>
 <body>
 <?php
  if(isset($_GET['error'])){
      echo $_GET['error'];
}
?>
    <form action="store.php" method ="post" >
  <div class = "class1"><h1>Register</h1>
  <label>
  Full Name-<input type = "text"placeholder = "enter name"id = " name"name= "name"/>
  <label><br></br>
  
  Email-<input type = "text"placeholder = " Email"id = "Email"name= "email"/><br></br></label>
  <label>
  Password-<input type = "text"placeholder = " Password"id = "password" name= "password"/>
  </label><br></br>
  phone<input type = "text"placeholder = "phone"id = "phone"name= "phone"/>
 <br></br> <label>
<p> you agree to our <a href="#">Terms & Privacy</a>.</p>
<input type="submit" value="submit" name="submit"/><br></br>
<p>Already have an account? <a href="#">Sign in</a>.</p>
</div >
 </form>
</body>
</html>


  