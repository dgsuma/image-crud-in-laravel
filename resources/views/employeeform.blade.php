<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="container">
  <div class="jumbotron">
   <h1> Image CRUD - in LARAVEL</h1> <br>
   <a href="/employee" class="btn btn-primary">Add Image</a>
   <br>
   <table class="table table-stripped table-bordered">
    <thead class="thead-dark">
     <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Post</th>
      <th scope="col">Image</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
     </tr>
    </thead>
    <tbody>
     @foreach ( $employees as $employee)
     <tr>
      <th>{{ $employee->id }}</th>
      <th>{{ $employee->name }}</th>
      <th>{{ $employee->email }}</th>
      <th>{{ $employee->post }}</th>
      <th> <img src="{{ asset('uploads/employee/' . $employee->image) }}" width="100px;" height="100px;" alt="image"> </th>
      
      <th> <a href="/editimage/{{ $employee->id }}" class="btn btn-success">Edit</a> </th>

      <th> <a href="/deleteimage/{{ $employee->id }}" class="btn btn-danger">DELETE</a> </th>
     </tr>
      @endforeach
    </tbody>
   </table>
  </div>
 </div>
</body>

</html>