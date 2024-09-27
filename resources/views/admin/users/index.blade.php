@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">

        <!-- main list table -->
        <div id="webinar-list" class="main-list col-12 col-lg-9 float-start pe-5 ps-5">
            {{--page title --}}
            <nav aria-label="breadcrumb" class="d-flex flex-row-reverse mt-3 fs-3 fw-bold" dir="ltr">
                <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">لیست کاربران</li>
                </ol>
            </nav>
            <!-- table title -->
            <div class="list-page-titles d-flex justify-content-start p-3 text-center">
                <div class="h4 col-1"></div>
                <div class="h4 col-2">آیدی</div>
                <div class="h4 col-3">نام و نام‌خوانوادگی</div>
                <div class="h4 col-2">سمت</div>
                <div class="h4 col-2"></div>
                <div class="h4 col-2">عملیات</div>
            </div>
            <!-- table elements each row -->

            <div id="user-table-content" class="d-flex flex-wrap">
                @foreach ($users as $user)
                <div class="list-page-items d-flex justify-content-start align-items-center mt-3 pt-5 pb-5 pe-2  text-center col-12">
                    <div class=" col-1 p-1 h-auto ">
                        <img src="/{{$user->profile_url}}" class="w-50 h-50 rounded-circle object-fit-contain" alt="...">
                    </div>
                    <div class="display-4 col-2">{{$user->id}}</div>
                    <div class="display-4 col-3">{{$user->name}}</div>
                    <div class="display-4 col-2">{{$user->role}}</div>
                    <button type="button" class="btn btn-secondary col-2" data-bs-container="body" data-bs-toggle="popover"
                            data-bs-placement="bottom"
                            data-bs-content="{{$user->description}}">
                        توضیحات
                    </button>
                    <!-- icons -->
                    <div class="list-icons d-flex justify-content-around col-2 pe-4 ps-4">

                        <!-- to edit the item -->
                        <div class="list-edit mt-2 pt-1">
                            <a href="{{ route('admin.users.edit', $user->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.75" height="25" viewBox="0 0 23.75 25">
                                <path id="edit-document"
                                      d="M6.5,27A2.507,2.507,0,0,1,4,24.5V4.5a2.408,2.408,0,0,1,.735-1.766A2.4,2.4,0,0,1,6.5,2h10L24,9.5v3.875L14,23.344V27Zm10,0V24.344l6.438-6.469L25.625,20.5,19.156,27Zm10.031-7.375-2.656-2.656.875-.875a1.235,1.235,0,0,1,.906-.375,1.135,1.135,0,0,1,.875.375l.875.906a1.274,1.274,0,0,1,.344.891,1.163,1.163,0,0,1-.344.859l-.875.875ZM15.25,10.75H21.5L15.25,4.5Z"
                                      transform="translate(-4 -2)" fill="#04355c"/>
                            </svg>
                            </a>
                        </div>
                        <!-- to delete the item -->
                        <div class="list-del mt-1">
                            <form action="{{route('admin.users.delete', $user->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                        <path fill="#04355c"
                                              d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </div>
    <nav aria-label="Page navigation example" dir="ltr">
        <ul class="pagination justify-content-center">
            {{$users->links()}}
        </ul>
    </nav>
@endsection
