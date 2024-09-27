@extends('layouts.frontend.master')

@section('content')
  <!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/podcast-head.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>

  {{-- podcast content --}}
  <div class="container">
      @foreach($podcasts as $podcast)
    <div id="podcast-player" class=" p-3 mb-5 mt-5 bg-body-tertiary rounded-3 d-md-flex flex-wrap justify-content-between " dir="ltr" style="height: 250px">

        <img src="/{{$podcast->thumbnail_url}}" alt="podcast-tumbnail" class="p-1 col-12 col-md-3 rounded-4 d-inline object-fit-fill h-100">

        <div id="podcast-content" class=" col-12 col-md-8 d-flex flex-column justify-content-between">

            <div id="opdcast-info" class="col-12 d-flex flex-column p-2 text-center" dir="rtl">

                <span id="podcast-name" class="fs-2 fw-semibold">{{$podcast->title}}</span>

                <span id="podcast-creator-name" class="fs-5 fw-light text-body-secondary me-3 mt-2">{{$podcast->category}}</span>

            </div>

            <div id="podcast-items" class="col-12">

                <div id="podcast-controls" class="d-flex flex-wrap justify-content-center align-items-center h-auto">

                    <audio src="/{{$podcast->podcast_url}}"  class="podcastAudio col-12 col-md-9" controls></audio>


                    {{--
                    <span id="current-time" class="time col-1 col-md-1 text-dark pt-4 mt-3 fs-5 fw-semibold">0:00</span>

                    <input id="seek-slider" class=" col-10
                    col-md-8 " type="range" value="0" max="100">

                    <span id="Duration" class="time col-1 col-md-1 text-dark pt-4 mt-3 fs-5 fw-semibold">0:00</span>

                    <button id="pp-btn"  class="btn col-12 col-md-2">
                    </button> --}}

                    {{-- <div id="volumeControls" class="col-12 col-md-4 d-flex justify-content-center">

                        <button class="btn btn-lg col-4" id="mute-icon">
                        </button>

                        <input id="volume-control" type="range" class="col-6" id="volume-slider" max="100" value="50">

                        <output id="volume-output" class="col-2 text-dark me-3 mt-3 pt-1 fs-5 fw-semibold">50</output>

                    </div> --}}


                </div>

            </div>

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
