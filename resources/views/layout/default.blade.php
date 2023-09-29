<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup">Sign Up</a>
        </li>
    </div>
  </div>
</nav>

<!-- Main content -->
@yield('content')


<!-- Footer -->
<div class="mt-5 pt-5 pb-5 footer">
 <div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Kendu Adventist Hospital</h2>
      <p class="pr-5 text-white-50">Kendu Adventist Hospital is a hospital of choose with all your healthcare service </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Contacts</h4>
        <ul class="m-0 p-0">
          <li>- <a href="Services">Services</a></li>
          <li>- <a href="#">About Us</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>22, Kendu, kendu Adventist Hospital</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@kah.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2023. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>
</body>
</html>