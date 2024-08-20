@extends('layouts.admin.master');

@section('content');
<div class="container-fluid position-relative">

    <div class="main-list col-9 float-start pe-5 ps-5 ">
        <div class="question-text p-3">
            <p>
                <strong>{{$question->title}}</strong>
                <br>
                {{$question->explanation}}
            </p>
        </div>

        <div class="answer-text mt-3 p-3">
            @include('errors.message')
            <form action="{{route('admin.inquiries.update', $answer->id)}}" method="post" class="answer-items" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-2 ">
                    <input type="text" class="form-control" placeholder="دسته‌بندی" value="{{$answer->category}}" name="category" aria-label="دسته یندی"
                           style="background-color: rgb(231, 231, 231); border: none;" required>
                </div>

                <div class="col-2 ">
                    <input type="text" class="form-control" placeholder="عنوان" value="{{$answer->title}}" name="title" aria-label="عنوان"
                           style="background-color: rgb(231, 231, 231); border: none;" required>
                </div>

                <div class="mt-3 col-8 m-auto">
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="8" required
                              style="background-color: rgb(231, 231, 231); border: none;"
                              placeholder="جواب پرسش">{{$answer->description}}</textarea>
                </div>

                <div class="mt-3 d-flex justify-content-between">
                    <div class="mb-3 col-8">
                        <img src="/{{ $answer->thumbnail_url }}" alt="" height="100px" width="100px">
                        <input class="form-control" type="file" name="thumbnail_url" id="formFileMultiple" multiple
                               style="background-color: rgb(231, 231, 231); border: none;">
                    </div>


                    <div class="col-2">
                        <button type="submit" class="btn mb-3"
                                style="background-color: rgb(231, 231, 231); border: none;">ثبت پاسخ
                        </button>
                    </div>

                </div>
            </form>
        </div>

    </div>

</div>
@endsection
