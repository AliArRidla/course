<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  {{-- css font --}}
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
<!-- or --> 
<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


  <!-- Favicons -->
  <link href="public/img/favicon.png" rel="icon">
  <link href="public/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
 
</head>

<body>

 @include('layouts.header')

 @yield('home')

  <main id="main">

   @yield('about')
   @yield('article')
   @yield('detailArticle')

   {{-- @include('about') --}}
    
  </main><!-- End #main -->
  {{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}
  
 @include('layouts.footer')

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>

</body>

</html>