@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid ">
        <!-- user lists -->
        <div id="all-users" class="col-12 col-lg-9 float-start d-flex justify-content-around grid gap-3 flex-wrap mt-lg-3">
            @foreach($users as $user)
            <div class="card card-online col-12 col-lg-4 col-md-6">
                <img src="/{{$user->profile_url}}" class="card-img-top user-img p-1" alt="...">
                <div class="card-body mt-1">
                    <div class="d-flex align-items-center justify-content-between mt-1">
                        <h4 class="float-end">{{$user->name}}</h4>
                    <div class="btn-group " role="group" aria-label="Basic example" dir="ltr">
                        <button type="button" class="btn btn-info disabled pt-1">{{$user->role}}</button>
                    </div>
                    </div>
                    <p class=" mt-4 p-2 overflow-auto ">
                        {{$user->description}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
