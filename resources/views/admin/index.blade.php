@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid position-relative">
        <!-- user lists -->
        <div id="all-users" class="col-9 float-start d-flex justify-content-around flex-wrap mt-5">
            @foreach($users as $user)
            <div class="card card-online">
                <img src="/{{$user->profile_url}}" class="card-img-top user-img p-1" alt="...">
                <div class="card-body d-flex align-items-center justify-content-between mt-1">
                    <h4 class="float-end">{{$user->name}}</h4>
                    <div class="btn-group " role="group" aria-label="Basic example" dir="ltr">
                        <button type="button" class="btn btn-info disabled">{{$user->role}}</button>
                    </div>
                </div>
{{--                *********اینجا description رو املایی اشتباه نوشته بودی، من درستش کردم ولی اگه جای دیگه هم ااینطوریه درستش کن یا اینکه از اینجا هم برش گردون به همون حالت اول*******--}}
                <p class="user-description p-2 overflow-auto ">
                {{$user->description}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
