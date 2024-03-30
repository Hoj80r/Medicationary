@extends('layouts.frontend.master')

@section('content')
  <!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/blog-head.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- blog contents -->
  <div class="article container text-center d-md-flex justify-content-end">

      <a href="#" id="article-img" class="col-md-4 align-middle">
        <img src="../images/Rectangle 1093.png" alt="">
      </a>

      <div class="article-data col-md-8 text-md-end">
        <p class="article-cat h3">قلب وگردش خون</p>

        <p class="article-title h2">چرا ما فشار خون میگیریم و عوارض آن چیست</p>

        <p class="article-date">اسفند 1401</p>

        <p class="article-discription">Et rebum sed et lorem clita sit dolore laoreet sanctus takimata eos delenit. Delenit ipsum aliquyam aliquam amet labore nonummy sea accusam consetetur ipsum et dolore illum ipsum justo ut duis ipsum. Gubergren sit et dolores voluptua ad accusam eleifend voluptua et et hendrerit.</p>

        <a href="{{route('home.article1')}}"><button class="article-btn btn">مطالعه بیشتر</button></a>
      </div>
  </div>
@endsection
