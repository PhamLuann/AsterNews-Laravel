@extends('layouts.master')
@section('title', 'Profile')
@section('content')
    <div class="grid grid-cols-3 mt-10 gap-2">
        <div>
            <div class="grid grid-cols-5 border-b-2">
                <p class="font-bold">ID</p>
                <p class="col-span-4">{{$user['id']}}</p>
            </div>
            <div class="grid grid-cols-5 mt-4 border-b-2">
                <p class="font-bold">Name</p>
                <p class="col-span-3">{{$user['name']}}</p>
                <a href="{{route('user.changeName')}}" class="text-center px-3 bg-yellow-300 rounded hover:bg-yellow-500" onclick="editName()">Edit</a>
            </div>
            <div class="grid grid-cols-5 mt-4 border-b-2">
                <p class="font-bold">Email</p>
                <p class="col-span-4">{{$user['email']}}</p>
            </div>
            <div class="grid grid-cols-5 mt-4 border-b-2">
                <p class="font-bold">Password</p>
                <p class="col-span-3"></p>
                <a href="{{route('user.changePassword')}}" class="text-center px-3 bg-yellow-300 rounded hover:bg-yellow-500">Edit</a>
            </div>
        </div>
        <div class="col-span-2" id="form">
            @yield('change')
        </div>
    </div>
@stop
