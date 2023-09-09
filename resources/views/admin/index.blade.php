@extends('layouts.admin.master')

@section('content')
<body class="admin-main">
  <div class="contaienr-fluid position-relative" >
    <!-- header -->
    <header class="admin-status col-9 float-start d-flex justify-content-between">
      <div id="admin-pageName" class="mt-2 me-5">
        <h3 class="display-5"></h3>
      </div>
      <!-- user info and log out btn -->
      <div id="admin-user-status" dir="ltr" class="ms-4 mt-2">
        <div class="btn-group w-auto" role="group" aria-label="Basic example">
          <!-- logout btn -->
          <button type="button" class="btn btn-outline-danger col-2 w-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 26 26"><path fill="currentColor" d="M13 0a2 2 0 0 0-2 2v10a2 2 0 0 0 4 0V2a2 2 0 0 0-2-2zM5.844 2.594a1.5 1.5 0 0 0-.782.344A12.796 12.796 0 0 0 .188 13C.188 20.058 5.94 25.813 13 25.813S25.813 20.058 25.813 13c0-4.073-1.902-7.717-4.875-10.063a1.5 1.5 0 1 0-1.875 2.344A9.804 9.804 0 0 1 22.813 13A9.789 9.789 0 0 1 13 22.813A9.789 9.789 0 0 1 3.187 13a9.808 9.808 0 0 1 3.75-7.719a1.5 1.5 0 0 0-1.093-2.687z"/>
            </svg>
          </button>
          <!-- user name -->
          <button type="button" class="btn btn-success col-9 w-auto">حجت راستی</button>
        </div>
      </div>
    </header>
    <!-- user lists -->
    <div id="all-users" class="col-9 float-start d-flex justify-content-around flex-wrap mt-5">

      <div class="card">
        <img src="/images/Path 222.svg" class="card-img-top" alt="...">
        <div class="card-body d-flex align-items-center justify-content-between">
          <h4 class="float-end">حجت راستی</h4>
          <div class="col-4 float-start d-flex flex-column ">
            <span class="btn btn-outline-light disabled placeholder">انلاین</span>
            <span class="btn btn-success disabled placeholder mt-2">مهندس</span>
          </div>
        </div>
      </div>

  </div>
  @endsection 
