<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
@include('nav')
  <style>


    body {
      background-image: url("images/s12.jpg");
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: 100% 100%;
      background-position: center;
      /* position: relative; */

    }

    .h1 {
      text-align: center;
      margin-top: 200px;
      margin-bottom: 40px;
      /* color:rgb(242, 139, 12); */

    }

    .btn {
      width: 200px;
      position: relative;
    }

    .container {
      text-align: center;
      padding-left: 40px;
    }

    .col-12 {
      background-color: rgb(0, 0, 0, 0.5);
    }

    .s {
      color: chocolate;
      font-weight: bolder;

    }

    .p {
      padding-top: 30px;

      padding-bottom: 30px;
      color: white;
    }

    .card {
      background-color: rgb(0, 0, 0, 0.5);
      color: whitesmoke;
    }
   
    .col-lg-3 {
      background-color: rgb(0, 0, 0, 0.5);
      color: whitesmoke
    }

    .sad {
      background-color: whitesmoke;
      color: black;
      height: 50px;

    }

    .h5 {
      text-align: center;
      padding-top: 10px;
    }

  </style>
</head>

<body>

  <H1 class="h1"> WELCOME TO YOUR WORLD HERE WE GO....</H1>

  <div class="col-4 mx-auto ">
    <button class="btn btn-dark btn-lg mx-2 my-2" type="button">Find Out More</button>
    <button class="btn btn-warning btn-lg mx-2 my-2 " type="button">Our Services</button>

  </div>

  <br><br><br><br>
  <br><br><br><br>



  <div class="container">

    <div class="col-12">
      <h1 class="s">Best Software For your Business</h1>

      <p class="p"> We provides varieties of development solutions
        including website development, application development, mobile application development
        and also problem solving for any kind of technological issues.Offer customization options to tailor your
        software
        to the specific needs of each client. Additionally, provide integration services to seamlessly connect your
        software with other tools they may be using.Create and maintain community forums and knowledge bases where users
        can share experiences, ask questions, and find solutions. This not only fosters a sense of community but also
        allows users to help each other.</p>

    </div>
  </div>

  <!-- <img src="images/s12.jpg" class="img-fluid" alt=""> -->
  <br><br><br><br>
  <br><br><br><br>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 my-3">
        <div class="card">

          <div class="card-body">
            <h4 class="card-title">Our Goals</h4>
            <p>Our success is best reflected in the success stories of our clients. We take pride in the positive
              feedback and transformative outcomes shared by businesses that have implemented our [software/services].
              Their
              achievements stand as a testament to the value we bring to our partners.</p>
          </div>
        </div>


      </div>

      <div class="col-lg-6 my-3">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Our achievements</h4>
            <p>Our success is best reflected in the success stories of our clients. We take pride in the positive
              feedback and transformative outcomes shared by businesses that have implemented our [software/services].
              Their
              achievements stand as a testament to the value we bring to our partners.</p>
          </div>
        </div>

      </div>
    </div>

  </div>

  <br><br><br><br>
  <br><br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 my-3">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Application Development</h4>
            <p class="text-center">We develop diffferent kinds of web based management softwares for our client.</p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 my-3">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Web Development</h4>
            <p class="text-center">We develop diffferent kinds of web based management softwares for our client.</p>

          </div>

        </div>
      </div>

      <div class="col-lg-4 my-3">
        <div class="card">

          <div class="card-body">

            <h4 class="card-title">Big Data Analysis</h4>
            <p class="text-center">We develop diffferent kinds of web based management softwares for our client.</p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br>
  <br><br><br><br>

  <!-- <footer></footer> -->

  <div class="sadman">

    <div class="container">
      <div class="row">
        <div class="col-lg-3 my-3">
          <h4>Overview</h4>
          <p>Waste management is intended to reduce the adverse effects of waste on human health, the
            environment, planetary resources, and aesthetics. The aim of waste management is to reduce the
            dangerous effects of such waste on the environment and human health.</p>
        </div>
        <div class="col-lg-3 my-3">
          <h4>where to find us?</h4>
          <p>KA 84/3, kagi bari, kuril biswroad, Dhaka-1229</p>
        </div>
        <div class="col-lg-3 my-3">
          <h4>Contact Info</h4>
          <p>+8801797506103 sadmansakib1075@gmail.com Hot Line:16161</p>


        </div>
        <div class="col-lg-3 my-3">
          <h4>link to find us</h4>
          <p>Come and visit our quarters or simply send us an email anytime you want. We are open to all
            suggestions from our clients.</p>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br>
  <div class="sad">
    <div>
      <h5 class="h5">Copyright by Logic Waves. All rights reserved. </h5>
    </div>
  </div>
 
</body>

</html>