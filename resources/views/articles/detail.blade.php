@extends('layouts.app')
@section('detailArticle')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Article Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Article Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            {{-- <img src="images/{{$article -> image}}" class="img-fluid" alt=""> --}}
            {{-- <img src="{{URL::to('images/'.$article->image)}}" class="img-fluid" alt=""> --}}

            <img src="{{asset('images/'.$article->image)}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{$article -> judul}}</h2>
          <p>{{$article -> body}}</p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->
@endsection