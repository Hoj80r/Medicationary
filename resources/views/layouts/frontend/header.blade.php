<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicationary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
    <script type="module" src="../js/podcasts.js"></script>
</head>
<body>
    <!-- nav bar -->
  <nav class="navbar sticky-top navbar-expand-md" id="nav-bar">
    <div class="container">

        <!-- nav logo -->
      <div class="col-2">
        <a class="navbar-brand" href="{{route('home.landscape')}}"> <em>Medicationary</em></a>
      </div>

      <!-- nav button when it collapse to smal size -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="nav-icon">
            <iconify-icon icon="fluent:navigation-24-filled" style="color: white;" width="28" height="24"></iconify-icon>
        </span>
      </button>

      <!-- the elemts of navbar -->
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav col-10 ">
          <li class="nav-item">
            <a class="nav-link " href="{{route('home.blog')}}">وبلاگ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home.webinar')}}">وبینار</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home.responses')}}">پاسخ ها</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('home.podcast')}}">پادکست</a>
          </li>

        </ul>
        <!-- search icon -->
        <form class="d-flex col-2 justify-content-start" id="search">
            <iconify-icon icon="ic:baseline-search"></iconify-icon>
        </form>
      </div>

    </div>
  </nav>


