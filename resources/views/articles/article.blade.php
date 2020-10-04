@extends('layouts.app')
@section('article')

<div class="container">
  <div class="site-container row row-cols-1 row-cols-md-3">
    @foreach ($articles as $item)
    <div class="article-container col mb-4">
      <article class="article-card">
        <figure class="article-image">
          <img src="images/{{$item -> image}}" class="card-img-top" alt="...">
        </figure>
        <div class="article-content">
          <p class="card-text"><small class="text-muted">Publish On {{ $item -> created_at->diffForHumans()}}</small></p>
          <a href="" class="card-category">Programming</a>
          {{-- <h3 class="card-title"></h3> --}}
          <h3 class="card-tittle">{{$item -> judul}}</h3>
          <p class="card-expert text-secondary">{{Str::limit($item -> body, 50, '..')}}</p>
          <a href="/articles/{{$item->id}}" class="stretched-link">Go somewhere</a>
        </div>
      </article>
    </div>
    @endforeach
    <div class="center">
      {{$articles -> links()}}
    </div>
  </div>
</div>

@endsection