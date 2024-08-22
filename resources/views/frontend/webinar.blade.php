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
    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{route('home.webinarPlayer')}}" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="webinar-card card  m-3">

      <div class="webinar-head">
        <div class="float-end col-4 webinar-status"><p class="align-middle">وضعیت دوره</p></div>

        <div class="webianr-orgnizer-data d-flex align-items-center">
          <img src="../images/podcast-Icon.png" alt="" class="orgnizer-img col-4 ">

          <div class="webinar-orgnizer col-8 d-flex align-items-center "><span>نام برگذارکننده</span></div>
        </div>
      </div>

      <div class="webianr-body card-body text-end">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
@endsection
