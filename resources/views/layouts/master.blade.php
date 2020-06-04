<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>M-BURGER</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
     body{
      background-image: url("https://www.cairowestmag.com/wp-content/uploads/2018/11/Burger-Factory3.jpeg");
            -webkit-background-size: cover;
            background-position: center center;
            height: 100%;
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  backdrop-filter: blur(2px);
        }
</style>
</head>
<body>
<div class="bs-example">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" >
  <div class="container" style="margin-top:0px">
    <a class="navbar-brand" href="#">
          <img src="https://s3.amazonaws.com/bucket.leye.co/uploads/2017/06/m-burger@2x.png"  height="32" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/calories">Calories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contacts</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="mb-3"></div>
      <div style="width:1300px;margin: 0 auto">
      @include ('includes.messages')
      </div>
      
      @yield('content')
     
</body>
</html>

