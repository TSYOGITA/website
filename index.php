<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></link>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>PHP Website</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand bg-white font-weight-bolder" style="color: red;" href="#">BoTx</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpwebfull/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/phpwebfull/about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Information
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="services.php">SERVICES</a></li>
            <li><a class="dropdown-item" href="contact.php">CONTACT</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-6">
<h1 style="color:orangered;">GENERATIONAL <br> EDUCATION <br> PLATFORM</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a gallery</p>
<a href="about.php"><button class="btn btn-success   ">GET STARTED</button></a>
</div>
<div class="col-6">
<img src="https://th.bing.com/th/id/OIP.pHa4QDsHixAeh7U-5ayh-gHaDt?w=338&h=175&c=7&o=5&dpr=1.25&pid=1.7" alt="image">
</div>
</div>
</div>
<br>
<br>
<div class="container yoyo pb-5 px-10">
<h1 class="text-center" style="color: white;">FOR STUDENTS</h1>
<p class="text-center" style="color: white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum</p>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center" style="color: orangered;">GRADE</h5>
      <hr>
      <h1 class="card-text" style="color: orangered;">3-6</h1>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center" style="color: orangered;">GRADE</h5>
      <hr>
      <h1 class="card-text" style="color: orangered;">7-10</h1>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title text-center" style="color: orangered;">GRADE</h5>
      <hr>
      <h1 class="card-text" style="color: orangered;">11-12</h1>
    </div>
  </div>
</div>
</div>
<br>
<br>
<div class="container">
<h1 class="text-center" style="color: orangered;">FOR EDUCATORS</h1>
<p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center" style="color: orangered;">ASPIRING STUDENTS</h5>
        <hr>
        <h5 class="card-text text-center" style="color: orangered;">THIS IS FOR <br>THOSE COLLEGE STUDENTS<br> WILLING TO GO BEYOND<br></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center" style="color: orangered;">ASPIRING ENTHUSIACTS</h5>
        <hr>
        <h5 class="card-text text-center" style="color: orangered;">THIS IS FOR <br>THOSE COLLEGE STUDENTS <br>WILLING TO GO BEYOND</h5>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<br>
<section>
  <h1 class="text-center" style="color: orangered;">SIGN-UP FORM</h1>
<form method="post" action="userinfo.php">
<div class="form-group">
<label>Username:</label>
<input type="text" name="user" class="form-control">
</div>
<div class="form-group">
<label>Email:</label>
<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
<label>Mobile:</label>
<input type="text" name="mobile" class="form-control">
</div>
<div class="form-group">
<label>Comments:</label>
<textarea  name="comment" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success">SUBMIT</button>
</form>
</section>
<footer>
  <div class="footer-content">
  <ul>
  <li><a href="https://www.linkedin.com/company/botxautomations/?originalSubdomain=in"><i class="fa fa-facebook"></i></a></li>
  <li><a href="https://www.linkedin.com/company/botx-cloud"><i class="fa fa-twitter"></i></a></li>
  <li><a href="https://dare2compete.com/o/marketing-botx-automations-pvt-ltd-157023#!"><i class="fa fa-google-plus"></i></a></li>
  </ul>
  </div>
  <h5 class="p-3 bg-orange text-white text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
