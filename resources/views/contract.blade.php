<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  @include('nav')

  <style>

  .h2{
    text-align:center;
    padding-top:60px;
    padding-bottom:30px;
  }

  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-8">

      

<div class="container mt-3">
  <h2 class="h2">Contract Us</h2>

@if(session ('success'))
<div class="alert alert-success"> {{session('success')}}
</div>
@endif
  <form action="contract" method="POST">
    @csrf
  <div class="mb-3">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control my-2" id="pwd" placeholder="Enter Your Name" name="name" value="{{old('name')}}">
@error('name')
<div class="text-danger">{{ $message}}</div>
@enderror
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control my-2" id="email" placeholder="Enter Your Email" name="email"value="{{old('email')}}">
      @error('email')
<div class="text-danger">{{ $message}}</div>
@enderror
    </div>
   
    <div class="mb-3 mt-3">
      <label for="comment">Messages:</label>
      <textarea class="form-control my-2" rows="5" id="comment" name="message"value="{{old('message')}}"></textarea>
      @error('message')
<div class="text-danger">{{ $message}}</div>
@enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
    </div>
  </div>

</body>
</html>
