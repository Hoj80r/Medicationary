@extends('layouts.frontend.master')

@section('content')
   <!-- header -->
   <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/webinar-head.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- webinar cards -->
  <div class="container text-center d-flex justify-content-between flex-wrap" id="webinar">
      @foreach($webinars as $webinar)
    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">{{$webinar->webinar_status}}</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="/{{$webinar->thumbnail_url}}" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده: {{$webinar->instructor}}</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">{{$webinar->title}}</h4>
        <h6 class="card-title">{{$webinar->category}}</h6>
        <p class="card-text">{{$webinar->description}}</p>
        <a href="{{route('home.webinarPlayer', $webinar->id)}}" class="btn btn-primary">اطلاعات بیشتر</a>
      </div>
    </div>
      @endforeach
    </div>
    {{-- pagination --}}
   <nav aria-label="Page navigation example" dir="ltr">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
@endsection
