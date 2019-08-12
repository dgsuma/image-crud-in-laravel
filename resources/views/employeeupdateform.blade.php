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
   <h1> Image CRUD: Update Image in Laravel</h1>
   <form action="/updateimage/{{ $employees->id }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <input type="hidden" name="id" id="id" value="{{ $employees->id }}">

    <div class="form-group">
     <label>Name</label>
     <input type="text" name="name" class="form-control" value="{{ $employees->name }}" placeholder="Enter Name">
    </div>

    <div class="form-group">
     <label>Email</label>
     <input type="email" name="email" class="form-control" value="{{ $employees->email }}" placeholder="Enter Email Id">
    </div>

    <div class="form-group">
     <label>Post</label>
     <input type="text" name="post" class="form-control" value="{{ $employees->post }}" placeholder="Enter Post">
    </div>

    <label> Image </label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" value="{{ $employees->image }}">
        <label class="custom-file-label">Choose file</label>
      </div>
    </div>
    <br><br>

    <button type="submit" name="submit" class="btn btn-primary btn-lg"> Update Data</button>
   </form>
  </div>
 </div>
</body>
</html>