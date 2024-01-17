<html>
    <head>
        <title>Registration</title>
    <link rel="stylesheet"  href="{{ asset('assets/css/style.css')}}">
    </head>
    <body>
    <form action="{{url('')}}/store"method="post">
	 @csrf
	<h1>Registration</h1>
	<div class="">
		<input type="text" name="name" id='name' value="" placeholder="Enter Full Name"/>
		@error('name')
    {{$message}}
     @enderror
	</div>
    <div class="">
		<input type="email" name="email" id='email' value="" placeholder="Enter  email address"   />
		@error('email')
       {{ $message}}
  @enderror
	</div>
    <!-- <div class="">
		<input type="text" name="phone" id='phone' value="" placeholder="Enter Phone number" />
	</div>
	<div class="">
		<input type="text" name="address" id='address' value="" placeholder="Enter address" />
	</div> -->
	<div class="">
		<input type="password" id='password' name="password" value="" placeholder="Enter a password"   />
		@error('password')
    {{ $message}}
     @enderror
	</div>		
	

	</div>
		<div class="center">
		<input class="submit" type="submit" id='submit' name="submit" value="Submit" />
 
    </body>
</html>