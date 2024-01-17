<!Doctype html>
 <html>
     <head>
         <title>all user</title>
         <link rel="stylesheet"  href="{{ asset('assets/css/style1.css')}}">
</head>
 <body>
    <div class = "container">
        <h1>All user</h1>
        <table>
     <thead>
         <tr>
             <th>Name</th>
             <th>email</th>
              <th>phone</th>
              <th>Action</th>
</thead>
 <tbody>
 
    @foreach($user as $users)
    {{-- $users --}}
   <tr>
    <td>{{ $users->name }}</td>
    <td>{{ $users->email }}</td>
    <td>{{ $users->password }}</td>
     <td>
       <a href="{{url('/')}}/edituser/{{$users->id}}">Edit</a>
       <a href="{{url('/')}}/delete/{{$users->id}}">delete</a>
        
</td>
</tr> 
   @endforeach
</tbody>

 <table>
     
</div>            
</body>
</html>
     