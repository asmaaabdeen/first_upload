<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>M-Burger</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
     body{
     
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
          <img src="https://s3.amazonaws.com/bucket.leye.co/uploads/2017/06/m-burger@2x.png" style="margin-top:4px" height="32" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
      <li class="nav-item">
          <a class="nav-link" href="/secmenu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/calories">calories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contacts">Contacts</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/feedback">feedback</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="/shopping">Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">LogOut</a>
        </li>
        
        
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="mb-3"></div>
      <div style="width:1300px;margin-left:100px">
      @include ('includes.messages')
      </div>
      
      <br>
<h1 style="margin-left:690px;font-size:50px">Menu</h1>
<div class="container page">
    
    <div class="container products">
    
    <span id="status"></span>
    
    <div class="row">
    
        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ $product->photo }}" width="500" height="300">
                    <div class="caption">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ strtolower($product->description) }}</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                        
                        <i class="fa fa-circle-o-notch fa-spin btn-loading" style="font-size:24px; display: none"></i>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    
    </div><!-- End row -->
    
    </div>
    
    </div>
    <script type="text/javascript">
            $(".add-to-order").click(function (e) {
                e.preventDefault();
    
                var ele = $(this);
    
                ele.siblings('.btn-loading').show();
    
                $.ajax({
                    url: '{{ url('add-to-order') }}' + '/' + ele.attr("data-id"),
                    method: "get",
                    data: {_token: '{{ csrf_token() }}'},
                    dataType: "json",
                    success: function (response) {
    
                        ele.siblings('.btn-loading').hide();
    
                        $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');
                        $("#header-bar").html(response.data);
                    }
                });
            });
        </script>
    
     
</body>
</html>




    
   