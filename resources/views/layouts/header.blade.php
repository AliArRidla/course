 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="/" class="logo mr-auto"><img src="{{asset('images/logo.png')}}" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Butterfly</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{ request()->is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
          <li class="{{ request()->is('articles') ? 'active' : ''}}"><a href="/articles">Article</a></li>
          <li class="user-icon"><a href="/login"><i class="bx bx-user bx-sm "></i></a></li>          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->