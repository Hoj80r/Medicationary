@extends('layouts.frontend.master')

@section('content')

  <!-- header -->
  <header id="header">

    <div id="header-img" class="text-center">
      <img src="/images/header.jpg" alt="headImg" class="img-fluid">
    </div>

  </header>
  <!-- ask a pharmacis -->
  <section class="container ask-phar">

    <a href="{{route('home.ask')}}">
      <p class="h2 col-xl-8 d-flex justify-content-center ">از یک داروساز بپرس</p>
    </a>

    <div class="d-flex justify-content-center justify-content-xl-between">

      <div class="discription d-xl-inline-block">
        <p > لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
        با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و
        مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
        تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
        می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
          شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و
          با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و
          مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی
          تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
          می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده،
            شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها </p>
      </div>

      <div class="d-flex justify-content-center">
        <a href="{{route('home.ask')}}" >
        <img src="/images/ask_a_pharmacist.jpg" alt="pharmacistIcon" >
        </a>
      </div>

    </div>
  </section>
  <!-- podcast -->
  <section id="podcast" >
    <div class="container ">
      <div style="padding: 25px 0 15px 0;">

        <a href="{{route('home.podcast')}}" id="podcasts-title" class="col-xl-8 d-flex justify-content-center" title="برای مشاهده پادکست های بیشتر کلیک کنید">
        <p class="h2">پادکست</p>
        </a>

      </div>
      <!-- suggested podcasts -->
      <div class="d-flex justify-content-center align-items-center justify-content-xl-between pb-5">
        <p class="text-light col-8 d-none d-md-block">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
        </p>

        <div class="headphone-img col-xl-3 d-flex justify-content-center col-12 col-md-4">
            <a href="{{route('home.podcast')}}" title="برای مشاهده پادکست های بیشتر کلیک کنید" >
            <img src="/images/headphone.png" alt="pharmacistIcon" class="img-fluid ">
            </a>
        </div>

      </div>
    </div>
  </section>
  <!-- blog -->
  <section id="blog" class="container">

    <div id="b-title" class="d-block">
      <p class="h2">
        جدید ترین مقالات منتشرشده
      </p>
    </div>

    <a href="{{route('home.blog')}}">
      <button type="button" class="btn float-xl-end" title="برای مقالات بیشتر ضربه بزنید">
        وبلاگ
      </button>
    </a>

    <br>
    <br>

    <div id="blog-items" class="d-xl-flex justify-content-end" >

      <div id="blog-imp-article" class="col-xl-7 float-xl-end" >
        <a href="">
          <img src="/images/تصویر.png" alt="" id="imp-article-img" class="img-fluid">
        </a>

        <a href="">
          <div id="blog-imp-title-article">
            <p class="h3">عنوان مقاله پیشنهاد شده</p>
          </div>
        </a>

        <div id="blog-imp-discription-article">
          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>
        </div>
      </div>

      <div class="flex-column">
        <div id="blog-article" class="float-start d-xl-inline-block" >

            <a href="">
              <img src="/images/Rectangle 1093.png" alt="" id="article-img" class="col-4 float-end">
            </a>
            <div class="col-8 float-start" id="blog-article-discription" >
              <a href=""><p class="h5">عنوان مقاله</p></a>

              <p style="width: 280px; height: 125px; overflow: hidden; margin-right: 35px;">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            </div>
        </div>

        </div>
      </div>

    </div>
  </section>
@endsection
