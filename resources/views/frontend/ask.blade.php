@extends('layouts.frontend.master')

@section('content')
<!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="../images/ask-a-phar.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- ask form -->
  <div class="container">
      @include('errors.message')
    <form action="{{route('admin.inquiries.addInquiries')}}" method="post" class="m-5 d-lg-flex justify-content-around">
        @csrf

     <div class="d-lg-flex justify-content-between col-lg-12" dir="ltr">
      <!-- qusetion and tittle section -->
     <div id="ask-left-items" class="col-12 p-3 col-lg-6">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="عنوان پرسش" name="question_title" dir="rtl" required>
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="#4867bc" d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.588 1.413T20 20H4Zm2-4h8v-2H6v2Zm10 0h2v-2h-2v2ZM6 12h2v-2H6v2Zm4 0h8v-2h-8v2Z"/></svg>
        </span>
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="explanation" dir="rtl" required></textarea>
      </div>

     </div>

     <!-- name email and file section -->
     <div id="ask-right-items" class="col-12 p-3 col-lg-6">
      <!-- name input -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="نام و نام‌خانوادگی" name="name" aria-label="Username" aria-describedby="basic-addon1" dir="rtl"  autofocus>
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
            <g id="Group_27" data-name="Group 27" transform="translate(-836 -270)">
              <rect id="Rectangle_247" data-name="Rectangle 247" width="50" height="50" transform="translate(836 270)" fill="#4867bc"/>
              <path id="Icon" d="M0,31V27.127c0-4.265,6.979-7.754,15.5-7.754S31,22.862,31,27.127V31ZM7.754,7.748A7.75,7.75,0,1,1,15.5,15.5,7.745,7.745,0,0,1,7.754,7.748Z" transform="translate(846 279)" fill="#fff"/>
            </g>
          </svg>

        </span>
      </div>
      <!-- email input -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
            <g id="Group_28" data-name="Group 28" transform="translate(-836 -550)">
              <rect id="Rectangle_251" data-name="Rectangle 251" width="50" height="50" transform="translate(836 550)" fill="#4867bc"/>
              <path id="alternate-email-rounded" d="M21.032,40.064a18.405,18.405,0,0,1-7.375-1.5A19.175,19.175,0,0,1,3.5,28.407,18.382,18.382,0,0,1,2,21.032a18.36,18.36,0,0,1,1.5-7.4A19.253,19.253,0,0,1,13.655,3.5,18.444,18.444,0,0,1,21.032,2a18.36,18.36,0,0,1,7.4,1.5A19.31,19.31,0,0,1,38.565,13.634a18.4,18.4,0,0,1,1.5,7.4v2.76a6.6,6.6,0,0,1-1.926,4.783A6.348,6.348,0,0,1,33.4,30.548a6.849,6.849,0,0,1-3.188-.761,7.144,7.144,0,0,1-2.427-2,9.48,9.48,0,0,1-6.756,2.76,9.5,9.5,0,0,1-9.516-9.516,9.5,9.5,0,0,1,9.516-9.516,9.5,9.5,0,0,1,9.516,9.516v2.76a2.787,2.787,0,0,0,.856,2.164,2.933,2.933,0,0,0,4,0,2.791,2.791,0,0,0,.856-2.164v-2.76a14.648,14.648,0,0,0-4.5-10.73,14.639,14.639,0,0,0-10.728-4.5A14.648,14.648,0,0,0,10.3,10.3a14.639,14.639,0,0,0-4.5,10.728,14.648,14.648,0,0,0,4.5,10.73,14.639,14.639,0,0,0,10.728,4.5h7.613a1.9,1.9,0,1,1,0,3.806Zm0-13.323a5.686,5.686,0,0,0,5.71-5.71,5.686,5.686,0,0,0-5.71-5.71,5.686,5.686,0,0,0-5.71,5.71,5.686,5.686,0,0,0,5.71,5.71Z" transform="translate(839.936 553.436)" fill="#fff"/>
            </g>
          </svg>

        </span>
        <input type="text" class="form-control" placeholder="name@example.com" name="email" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>
      <!-- file input -->
      <div class="input-group mb-3" dir="rtl">
          <input class="form-control m-3 text-start" type="tel" name="mobile" placeholder="09xxxxxxxxx">
{{--        <input class="form-control" type="file" name="file" id=" formFileMultiple" multiple>--}}
      </div>
    </div>
     </div>

    <!-- submit btn -->
    <div class="col-12 m-3  text-center col-lg-2 m-lg-0 lg-hidden h-auto ">
      <button type="submit" class="btn p-2 w-50 h-100 " style="color: #fff; background-color: #4867BC;">ارسال</button>
    </div>

    </form>
  </div>
@endsection
