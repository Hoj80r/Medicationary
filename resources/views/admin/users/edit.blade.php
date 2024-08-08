@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">{{--page title --}}
        <nav aria-label="breadcrumb" class="ms-5 ps-3 mt-3
        float-start fs-3 fw-bold" dir="ltr">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">ویرایش کاربر</li>
            </ol>
        </nav>

        <div class="main-list col-9 float-start pe-5 ps-5 ">
            @include('errors.message')
            <form action=" {{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="user_id" value="{{$user->id}}">
                <div class="d-flex justify-content-between mt-5">
                    <!-- first & lastname fild -->
                    <div class="col-4">
                        <input class="form-control m-3" type="text" name="name" placeholder="نام و نام خانوادگی" value="{{$user->name}}">
                        <input class="form-control m-3 text-start" type="tel" name="mobile" placeholder="09xxxxxxxxx" value="{{$user->mobile}}">
                    </div>
                    <!-- image upload input -->
                    <div class="col-4">
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
                    <div class="col-4">
                        <input class="form-control m-3" type="password" name="password" dir="ltr" placeholder="password" value="{{$user->password}}">
                        <input type="email" name="email" class="form-control m-3" dir="ltr" id="exampleFormControlInput1"
                               placeholder="name@example.com" value="{{$user->email}}">
                    </div>
                </div>
                <!-- role -->
                <div class="col-md-4">
                    <div class="form-group">
                        <textarea name="description" id="editor">لطفا متن مورد نظر خودتان را وارد کنید</textarea>
                    </div>
                    <div class="form-group">
                        {{-- <label>نقش کاربری</label>--}}
                        <select class="form-control" name="role">
                            <option value="user"{{ $user->role == 'user' ? 'selected' : '' }}>کاربر</option>
                            {{--   <option value="2">طراح و فروشنده</option>--}}
                            <option value="admin" value="user"{{ $user->role == 'admin' ? 'selected' : '' }}>ادمین</option>
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

