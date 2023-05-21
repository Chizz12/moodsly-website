@extends('layouts.app')

@section('content')
<!-- Template Main CSS File -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

  
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
<a href="/home" class="logo d-flex align-items-center">
  <!-- Uncomment the line below if you also wish to use an image logo -->
  <!-- <img src="assets/img/logo.png" alt=""> -->
  <h1>B-Sigma<span>.</span></h1>
</a>
<nav id="navbar" class="navbar">
  <ul>
    <li><a href="/home">Home</a></li>
    <li><a href="#contact">About</a></li>
    <li><a href="/dashboard">Message</a></li>
  </ul>
</nav><!-- .navbar -->

<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
<!-- End Header -->

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/home">Home</a></li>
            <li>Message</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <a href="/dashboard/create"><button class="btn btn-primary px-3 mt-3">Masukan Data</button></a>


@endsection