@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">

        <div class="main-list col-12 col-lg-9 float-start pe-5 ps-5 ">
            {{--page title --}}
            <nav aria-label="breadcrumb" class="d-flex flex-row-reverse mt-3 fs-3 fw-bold" dir="ltr">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">ویرایش کاربر</li>
                </ol>
            </nav>
            @include('errors.message')
            <form action=" {{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="d-flex flex-wrap justify-content-between mt-5">
                    <!-- first & lastname fild -->
                    <div class="col-md-3 col-12">
                        <input class="form-control m-3" type="text" name="name" placeholder="نام و نام خانوادگی" value="{{$user->name}}">
                        <input class="form-control m-3 text-start" type="tel" name="mobile" placeholder="09xxxxxxxxx" value="{{$user->mobile}}">
                    </div>
                    <!-- image upload input -->
                    <div class="col-md-3 col-12">
                        <div class="d-flex justify-content-center mb-4 " id="add-userImg">
                            <img src="/{{$user->profile_url}}"
                                 class="rounded-circle"
                                 alt="example placeholder" style="width: 200px;"/>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-secondary" id="add-userImgBtn">
                                <label class="form-label text-white m-1" for="customFile2">آپلود عکس</label>
                                <input type="file" name="profile_url" class="form-control d-none" id="customFile2" accept="image/*" />
                            </div>
                        </div>
                    </div>
                    <!-- e-mail & phone-number fild -->
                    <div class="col-md-3 col-12">
                        <input type="email" name="email" class="form-control m-3" dir="ltr" id="exampleFormControlInput1"
                               placeholder="name@example.com" value="{{$user->email}}">
                    </div>
                </div>
                <!-- role -->
                <div class="mt-5 d-flex flex-column text-center ">
                    <div class="form-group ">
                        <textarea name="description" id="editor" cols="50" rows="5" placeholder="لطفا متن مورد نظر خودتان را وارد کنید"></textarea>
                    </div>
                    <div class="form-group">
                       {{-- <label>نقش کاربری</label>--}}
                        <select class="form-control mt-4 d-inline w-25 text-center " name="role">
                            <option value="user" >کاربر</option>
                            {{--   <option value="2">طراح و فروشنده</option>--}}
                            <option value="admin" >ادمین</option>
                        </select>
                    </div>
                </div>
                <!-- sub btn -->
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success w-25 p-3">ثبت</button>
                </div>

            </form>
        </div>

    </div>
@endsection

