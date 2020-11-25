<!DOCTYPE html>
<html lang="en">

<head>

  @include('website.includes.head')

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('/') ? 'active': ''}}">
            <a class="nav-link" href="{{URL::to('/')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item {{ Request::is('about') ? 'active': ''}}">
            <a class="nav-link" href="{{URL::to('about')}}">About</a>
          </li>
          <li class="nav-item {{ Request::is('services') ? 'active': ''}}">
            <a class="nav-link " href="{{URL::to('services')}}">Services</a>
          </li>
          <li class="nav-item {{ Request::is('contact') ? 'active': ''}}">
            <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
   @yield('content')
    <!-- /.row -->

  </div>
   @include('website.includes.footer')

   @include('website.includes.script')

</body>

</html>