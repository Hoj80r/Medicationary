@extends('layouts.admin.master')

@section('content')
<<<<<<< HEAD
    <div class="container-fluid position-relative">
=======
    <div class="container-fluid position-relative">{{--page title --}}
        <nav aria-label="breadcrumb" class="ms-5 ps-3 mt-3
        float-start fs-3 fw-bold" dir="ltr">
            <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">افزودن کاربر</li>
            </ol>
        </nav>

>>>>>>> d40cdc5185329492929dcf757d77d557ffe0ff27
        <div class="main-list col-9 float-start pe-5 ps-5 ">
            <form action="">
                <div class="d-flex justify-content-between mt-5">
                    <!-- first & lastname fild -->
                    <div class="col-4">
<<<<<<< HEAD
                        <input class="form-control m-3" type="text" placeholder="نام">
                        <input class="form-control m-3" type="text" placeholder="نام خانوادگی">
                    </div>
                    <!-- image upload input -->
                    <div class="col-4">
                        <div class="d-flex justify-content-center mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                 class="rounded-circle" alt="example placeholder" style="width: 200px;"/>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-secondary">
                                <label class="form-label text-white m-1" for="customFile2">آپلود عکس</label>
                                <input type="file" class="form-control d-none" id="customFile2"/>
=======
                        <input class="form-control m-3" type="text" placeholder="نام و نام خانوادگی">
                        <input class="form-control m-3 text-start" type="tel" placeholder="09xxxxxxxxx">
                    </div>
                    <!-- image upload input -->
                    <div class="col-4">
                        <div class="d-flex justify-content-center mb-4 " id="add-userImg">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                 class="rounded-circle"
                                 alt="example placeholder" style="width: 200px;"/>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-secondary" id="add-userImgBtn">
                                <label class="form-label text-white m-1" for="customFile2">آپلود عکس</label>
                                <input type="file" class="form-control d-none" id="customFile2" accept="image/*" />
>>>>>>> d40cdc5185329492929dcf757d77d557ffe0ff27
                            </div>
                        </div>
                    </div>
                    <!-- e-mail & phone-number fild -->
                    <div class="col-4">
                        <input class="form-control m-3" type="password" name="phone" dir="ltr" placeholder="password">
                        <input type="email" class="form-control m-3" dir="ltr" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                </div>
                <!-- sub btn -->
                <div class="text-center mt-5">
<<<<<<< HEAD
                    <button type="button" class="btn btn-success w-25 p-3">ثبت</button>
=======
                    <button type="button" class="btn btn-success w-25 p-3"><a href="#" class="link-underline-dark link-light">ثبت</a></button>
>>>>>>> d40cdc5185329492929dcf757d77d557ffe0ff27
                </div>

            </form>
        </div>

    </div>
@endsection
<<<<<<< HEAD
=======

>>>>>>> d40cdc5185329492929dcf757d77d557ffe0ff27
