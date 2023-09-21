@extends('layouts.admin.master')

@section('content')
  <div class="container-fluid position-relative" >
    <!-- user lists -->
    <div id="all-users" class="col-9 float-start d-flex justify-content-around flex-wrap mt-5">

      <div class="card card-online">
        <img src="/images/1.jpg" class="card-img-top user-img p-1" alt="...">
        <div class="card-body d-flex align-items-center justify-content-between mt-1">
        <h4 class="float-end">حجت راستی</h4>
        <div class="col-4 float-start d-flex flex-column ">
        <span class="btn btn-info disabled placeholder mt-2">مهندس</span>
        </div>
        </div>
        <p class="user-discription p-2 overflow-auto ">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, exercitationem, id architecto odio recusandae asperiores dolore accusantium provident quod optio ipsa fugit. Quod placeat sed exercitationem cum rerum laborum! Odio.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex impedit harum beatae, omnis nobis assumenda quae veniam deleniti debitis possimus delectus temporibus, eius facilis ratione, aperiam reiciendis corrupti veritatis voluptatem.
        </p>
      </div>

      <div class="card card-offline">
        <img src="/images/2.jpg" class="card-img-top user-img p-1" alt="...">
        <div class="card-body d-flex align-items-center justify-content-between mt-1">
        <h4 class="float-end">حجت راستی</h4>
        <div class="col-4 float-start d-flex flex-column ">
        <span class="btn btn-info disabled placeholder mt-2">مهندس</span>
        </div>
        </div>
        <p class="user-discription p-2 overflow-auto ">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, exercitationem, id architecto odio recusandae asperiores dolore accusantium provident quod optio ipsa fugit. Quod placeat sed exercitationem cum rerum laborum! Odio.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex impedit harum beatae, omnis nobis assumenda quae veniam deleniti debitis possimus delectus temporibus, eius facilis ratione, aperiam reiciendis corrupti veritatis voluptatem.
        </p>
      </div>
    </div>
  </div>
  @endsection
