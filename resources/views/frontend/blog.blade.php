@extends('layouts.frontend.master')

@section('content')
  <!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/blog-head.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- blog contents -->
  @include('errors.message')
  @foreach($posts as $post)
  <div class="article container text-center d-md-flex justify-content-end">


        <img class="col-md-4 ms-3 img-thumbnail rounded object-fit-fill " src="/{{$post->thumbnail_url}}" alt="">


      <div class="article-data col-md-8 text-md-end">
        <p class="article-cat h3">{{$post->category}}</p>

        <p class="article-title h2">{{$post->title}}</p>

        <p class="article-cat h3">نام نویسنده</p>

        <p class="article-date">{{$post->created_at}}</p>

        <p class="article-discription">{{$post->body}}</p>

        <a href="{{route('home.post', $post->id)}}"><button class="article-btn btn">مطالعه بیشتر</button></a>
      </div>
  </div>
  @endforeach
@endsection
