@extends('layouts.admin.master')

@section('content')
<div class="container-fluid position-relative" >


    <!-- upload form -->
    <div id="webinar-up" class="col-12 col-lg-9 float-start pe-5 ps-5 " dir="ltr">
        {{--page title --}}
        <nav aria-label="breadcrumb" class="d-flex flex-row-reverse mt-3 fs-3 fw-bold" dir="ltr">
            <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">افزودن مقاله</li>
            </ol>
        </nav>
        @include('errors.message')
        <form action="{{ route('admin.post.store') }}" method="post" class="d-flex justify-content-center flex-wrap mt-5" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3 w-100" >
                <!-- category input -->
                <input type="text" class="form-control text-center" placeholder="دسته بندی" name="category" required>
                <!-- middle pic -->
                <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 64 64"><g transform="rotate(180 32 32)"><path fill="currentColor" d="M32 2C15.432 2 2 15.432 2 32s13.432 30 30 30s30-13.432 30-30S48.568 2 32 2zm0 57.5C16.836 59.5 4.5 47.164 4.5 32S16.836 4.5 32 4.5c15.163 0 27.5 12.336 27.5 27.5S47.163 59.5 32 59.5z"/><circle cx="20.5" cy="26.592" r="5" fill="currentColor"/><circle cx="43.5" cy="26.592" r="5" fill="currentColor"/><path fill="currentColor" d="M44.584 40.279c-8.11 5.656-17.106 5.623-25.168 0c-.97-.677-1.845.495-1.187 1.578c2.458 4.047 7.417 7.65 13.771 7.65s11.313-3.604 13.771-7.65c.658-1.083-.217-2.254-1.187-1.578"/></g></svg>
                </span>
                <!-- title input -->
                <input type="text" class="form-control text-center" placeholder="عنوان" name="title" required autofocus>

            </div>
            <div class="col-xl-5 col-12 mb-3">
                {{-- author input --}}
                <input type="text" class="form-control text-center" placeholder="نویسنده" name="author" required>
            </div>

            <!-- discription input -->
            <div class="col-8">
                <textarea class="form-control" required rows="5" cols="8" dir="rtl" placeholder="توضیحات" name="abstract"></textarea>
            </div>
            <!-- file upload area -->
            <div class="col-10 mt-3 text-center">
                <label for="thumbnail_url">افزودن تامبنیل مقاله</label>
                <input class="form-control m-3" type="file" id="formFileMultiple" name="thumbnail_url" multiple title="افزودن تامبنیل">
                <label for="thumbnail_url" class="">افزودن فایل مقاله</label>
                <input class="form-control m-3" type="file" id="formFileMultiple" name="post_url" multiple>
                <!-- submit btn -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 ps-5 pe-5 pt-2 pb-2 ">ثبت</button>
                </div>

            </div>



        </form>

    </div>

</div>
@endsection
