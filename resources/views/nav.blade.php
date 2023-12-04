<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>

  <style>
    .navbar-brand {
      font-size: 40px;
    }

    .nav-link {
      font-size: 20px;

    }

    .nav-link:hover {
      font-weight: bolder;
      background-color: chocolate;

    }

    .nav-item {
      margin-left: 15px;
    }

    .a {
      text-decoration: none;
      font-size: 40px;
      color: rgb(247, 109, 10)
    }

  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
         
          <li class="nav-item">
            <a class="nav-link" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contract">Contract</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">LogIn</a>
          </li>

        </ul>


        <a class="navbar-brand" href="#"><b> Logic</b></a>
        <a class="a" href="#"><b> Waves</b></a>

      </div>
    </div>
  </nav>
 
</body>

</html>