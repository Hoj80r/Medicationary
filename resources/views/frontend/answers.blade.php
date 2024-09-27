@extends('layouts.frontend.master')

@section('content')
  <!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/answear.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- answear list -->
  @foreach($responses as $response)
  <div class="container">
    <div class="ask text-center d-md-flex justify-content-between  m-3">

        <div id="answear-img" class="col-md-3 h-auto col-12 " >
          <img class="img-thumbnail mt-4" src="/{{$response->thumbnail_url}}" alt="">
        </div>

        <div class="ask-data col-md-9 text-md-end h-auto p-4">
            <p class="ask-title h2 text-center">{{$response->title}}</p>
          <div class="d-flex justify-content-end m-2">
            <p class="ask-cat h4 d-inline">{{$response->category}}</p>
          </div>
          <p class="ask-discription overflow-scroll" style="height: 140px;">
              {{$response->description}}
          </p>
          <a href="{{route('home.post', $response->id)}}"><button class="article-btn btn">مطالعه بیشتر</button></a>
        </div>
      </div>
  </div>
  @endforeach
@endsection
