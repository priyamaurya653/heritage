<!doctype html>
 <html>
     <head>
         <title>edit user</title>
         <link rel="stylesheet"  href="{{ asset('assets/css/sheet.css')}}">
  </head>
  <body>
    <div class = "container">
         <h1>Edit user</h1>
 <form action="{{url('')}}/update/{{$user->id}}" method="post">
             @csrf
 <input type="text" name="name" id='name' value="{{$user->name}}" placeholder="Enter Full Name" /><br></br>
    @error('name')
    {{message}}
    @enderror
<input type="text" name="email" id='email' value="{{$user->email}}" placeholder="Enter email"/><br></br>
    @error('email')
    {{message}}
    @enderror
 <input type="text" name="password" id='password' value="{{$user->password}}" placeholder="Enter password"/><br></br>
    @error('password')
    {{message}}
     @enderror   
		<input class="submit" type="submit" id='submit' name="submit" value="{{$user->update}}" />            
        </body>
        </html>