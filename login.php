 <!doctype html>
 <html>
 <head>
 <title>my php</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
 <style>s
 .class{
   width:35%;
   height:470px;
    background-color:#B39DDB;
     margin-left:35%;
     margin-right:45%; 
    padding-left:3%;
    
      border-radius:7%;
       float:left;
       }
 h1{
  padding-top:1%;
 text-align:center;
 }
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color:#EDE7F6;
}
   button{
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
 
  width: 90%;
}
                             

   
 </style>
<body>
<form action = "dologin.php" method = "post">
 <div class = "class" ><h1>Login</h1>
    
    <h2>Username</h2>
<span class="material-symbols-outlined">
mail
</span> <input type = "text" name = "email"></input type><br></br>
     <h2>password</h2>

</span>
     <span class="material-symbols-outlined">
password
</span><input type = "text" name = "password"></input type><br></br><input type="submit" value="submit" name="submit"/><br></br>
          <label>
      <p>Sign in with your account? <a href="#">Sign in</a>.</p>
      </label>
 </form></div>
     
 
 </body>
 </html>
