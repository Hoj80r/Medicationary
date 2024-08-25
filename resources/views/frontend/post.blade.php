@extends('layouts.frontend.master')

@section('content')
  <!-- header -->
  <header id="header" class="position-relative">

    <div id="header-img" class="text-center">
      <img src="../images/blog-head.png" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- blog contents -->
  <div class="container">
    <div id="blog-article-title" class="text-center d-inline-block w-100 ">
        <h3>{{$post->title}}</h3>
        <p>نام نویسنده</p>
        <p>{{$post->created_at}}</p>
    </div>
    <div id="blog-article-text" class="mt-5 pe-5 ps-5 pt-3 pb-3 container-fluid">
        <p>
            {{$post->body}}
        </p>
    </div>
  </div>
@endsection
