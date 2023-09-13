@extends('layouts.admin.master')

@section('content')
  <div class="container-fluid position-relative" >
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
