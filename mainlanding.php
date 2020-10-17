<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <title> TSA PHOTOGRAPHY </title>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<?php include 'links.php'  ?>
<link  rel="stylesheet" type="text/css" href="landing.css">

</head>
<body onload="myfunction()">
<div id="loading">
</div>
<nav class="navbar navbar-expand-lg  ">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="demo" aria-controls="demo" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
  
  <div id="demo" class="collapse navbar-collapse">
    <ul class="navbar-nav ">
    <a class="navbar-brand" href="#"><img src="Logo.jpeg" alt="logo"  class="logo" ></a>
   
      <li class="nav-item">
        <a class="nav-link" href="#s1" >ABOUT US</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#s2" >OUR EVENTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#s3" >OUR TEAM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#s4" >PACKAGES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#s5" >CONTACT US</a>

      </li>
      <li class="nav-item ">
        <a class="btn-danger" href="login.php" >ADMIN LOGIN</a>
      </li>
    
    </ul>   
  </div>
</nav>
<section class="welcome">
<div class="container">

<div id="myslideshow" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/13.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</section>

 <section id="s1" class="sec1">
 <div class="container">
<h1> ABOUT US</h1>
<br>
<blockquote>
Our work comes from a family tradition, dating back two generations, so we understand how important family and tradition are for you, especially on your special day. And hence, we capture your story with Elegance, Class and Style

</blockquote>
 </div>
</section>

<section id="s2" class="sec2">
<h1> OUR EVENTS</h1>
<br><br>
 <div class="container">
 <div class="row">
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/0.jpg" class="img-fluid rounded" >
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/3.jpg" class="img-fluid rounded">
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/5.jpg" class="img-fluid rounded">
</div>


 </div>
<br><br>
 <div class="row">
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/1.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/6.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/8.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/9.jpg" class="img-fluid rounded ">
</div>

 </div>
 <br><br>
 <div class="row">

<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/14.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/7.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/16.jpg" class="img-fluid rounded ">
</div>
<div class="col-lg-3 col-md-4 col-sm-3 col-12">
<img src="images/17.jpg" class="img-fluid rounded ">
</div>
 </div>
 <br><br>
 <div class="row">
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/11.jpg" class="img-fluid rounded" >
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/10.jpg" class="img-fluid rounded">
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/15.jpg" class="img-fluid rounded">
</div>


 </div>
</div>

</section>
<section id="s3" class="sec3">
  <h1>OUR TEAM</h1>
  <br><br>
  <div class="container">
   <div class="row">
     
   <div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/21.jpg" class="img-fluid rounded" >
<h1 class="">SYED AHSAN ALI</h1>
<h3 >FOUNDER (HEAD PHOTOGRAPHER)</h3>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/28.jpg"  class="img-fluid rounded">
<h1>TANZEEL KHAN</h1>
<h3>SOCIALMEDIA DIRECTOR</h3>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-12">
<img src="images/26.jpg" style="height:525px" class="img-fluid rounded">
<h1>ALI KHAN</h1>
<h3>HEAD VIDEOGRAPHER</h3>
</div>

   </div>
   </div>
</section>
<section id="s4" class="sec4">
<h1> OUR PACKAGES</h1>
<br><br>
<div class="container">

<div class="row">
     
<div class="card-deck">
  <div class="card">
  <img src="images/37.jpg" class="card-img-top" alt="..." style="height:236px;">
    <div class="card-body">
      <h5 class="card-title">Platinium</h5>
      <p class="card-text">2 Photographers.</p>
      <p class="card-text">2 DSLR Videgraphers (Sony)</p>
      <p class="card-text">1 Drone</p>
      <p class="card-text">1 Ronin</p>
      <p class="card-text">Free Daylight Shoot</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="images/34.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Gold</h5>
      <p class="card-text">2 Photographers.</p>
      <p class="card-text">2 Videgraphers(1 Sony DSLR & 1 Canon DSLR).</p>
      <p class="card-text">1 Drone </p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="images/35.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Silver</h5>
      <p class="card-text">1 Photographers.</p>
      <p class="card-text">1 Videographer (Canon DSLR)</p>
      <p class="card-text">1 Steady Cam</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

</div>
</div>
</section>
<section id="s5" class="sec5">
<h1>GET IN TOUCH</h1>
  <div class="container">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h1 class="stranger">Don’t be a stranger</h1>
<h2 class="hello">just say hello.</h2>
<p class="para">Feel free to get in touch with us. We are always open to discussing new creative ideas or opportunities to be part of your visions</p>

<form action="contact.php" method="post" class="contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name" required="required">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Contact Number" required="required">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
          </div>

          <div class="form-group">
            <textarea  name="msg" class="form-control" rows="4" placeholder="Your Message" required="required"></textarea>
          </div>
            <input type="submit" name="submit" value="send message" class="btn btn-primary">
        </form>

</div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h3 class="address"><i class="fa fa-map-marker"></i> ADDRESS</h3>
<p class="add">SAGHIR CENTER c-76 FB AREA 16, NEXT TO DECENT STATIONERY، KARACHI</p>
<h3 class="phone"><i class="fa fa-phone"></i> PHONE</h3>
<p class="fc">03012952321</p>
<p class="sc">03128046700</p>
<p class="tc">03232824623</p>
<br>
<h3 class="email"><i class="fa fa-envelope-o"></i> EMAIL</h3>
<p class="mail">phototsa8@gmail.com</p>
    </div>
    </div>
  </div>
</section>

<section id="footer">

  <div class="container text-center">
      
    <p> © 2019 TSA Photographers. All Rights Reserved.   </p>
       
  </div>

</section>

<script >
 var preloader = document.getElementById('loading');
 function myfunction(){
  preloader.style.display = 'none';
 }
</script>

</body>
</html> 