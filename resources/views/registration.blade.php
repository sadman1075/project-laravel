<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    
    @include('nav')
    <style>
        .h2{
         padding-left:150px; 
        }
         body {
       background-image: url("images/s12.jpg");
       background-attachment: fixed;
       background-repeat: no-repeat;
       background-size: 100% 100%;
       background-position: center;
       /* position: relative; */
 
     }
    
     form{
         background-color: rgb(0, 0, 0, 0.5);
         color:whitesmoke;
         width: 500px;
         margin-left: 10px;
 border-radius: 10px;
 
 
    
 
     }
     
     .input{
         background-color: rgb(0, 0, 0, 0.5);
         color:white;
         margin-left: 15px;
         width: 430px;
         border:solid 1px white;
         border-radius: 5px;
 
     }
 .label{
     margin-left: 15px;
 
 }
 .btn{
     margin-left:90px;
 }
 
 
 
     </style>
 </head>
 
 <body>
 
 
     <div class="container my-5">
 
         <div class="row justify-content-center">
 
             <div class="col-sm-6">
 
 
     <form action="registration" method="POST">
        @csrf
         <h2 class="h2">Registration</h2>

         @if(session('failer'))
         <div class='alert alert-danger text-center'>{{session('failer')}}</div>
         @endif
 
 <div class="col-lg-6">
         <label for="label" class="label my-1">Name</label><br>
         <input type="text" class="input my-1" id="inputEmail4" name="name" value="{{old('name')}}">
         @error('name')
         <div class='text-danger mx-3'>{{$message}}</div>
         @enderror
     </div>
     
     <div class="col-lg-6">
 
           <label for="label" class="label my-1">Email</label><br>
           <input type="email" class="input" id="inputEmail4" name="email" value="{{old('email')}}">
           @error('email')
           <div class="text-danger mx-3">{{$message}}</div>
           @enderror
     </div>
     
 
           <div class="col-lg-6">
 
           <label for="label" class="label my-1">Address</label><br>
           <input type="text" class="input my-1" id="inputAddress" name="addres" value="{{old('addres')}}">
           @error('addres')
           <div class="text-danger mx-3">{{$message}}</div>
           @enderror
           </div>
           <div class="col-lg-6">
 
           <label for="label" class="label my-1">City</label><br>
           <input type="text" class="input my-1" id="inputCity" name="city" value="{{old('city')}}">
           @error('city')
           <div class="text-danger mx-3">{{$message}}</div>
           @enderror
           </div>
         
           <div class="col-lg-6">
 
           <label for="label" class="label my-1">State</label><br>
           <input type="text" class="input my-1" id="inputCity" name="state" value="{{old('state')}}">
           @error('state')
           <div class="text-danger mx-3">{{$message}}</div>
           @enderror
           </div>
           <div class="col-lg-6">
 
           <label for="label" class="label my-1">Password</label><br>
           <input type="password" class="input my-1" id="inputPassword4" name="password" value="{{old('password')}}">
           @error('password')
           <div class="text-danger mx-3">{{$message}}</div>
           @enderror
           </div>
           <div class="col-lg-6">
 
           <label for="label" class="label my-1">confirm Password</label><br>
           <input type="password" class="input my-1" id="inputPassword4" name="password1" value="{{old('password1')}}">
           @error('password1')
           <div class=" text-danger mx-2">{{$message}}</div>
           @enderror
           </div>
           
         
         
 
         
         <div >
           <button type="submit" class="btn btn-primary  my-4">Sign in</button>
           <button type="submit" class="btn btn-primary  my-4">Have An Account</button>
         </div>
         
       </form>
       </div>
       
     </div>
     </div>

</body>

</html>