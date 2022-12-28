@extends('admin.layouts.admin')
@section('title', 'Update User')
@section('content')
    <div class="flex justify-center min-h-screen">
        <form action="{{route('admin.postUpdate')}}" method="post">
            @csrf
            <input type="text" name="id" value="{{$user['id']}}"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2" readonly>
            <input type="text" placeholder="Name" name="name" value="{{$user['name']}}"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('name'))
                <p class="text-red-500">{{$errors->first('name')}}</p>
            @endif
            <input type="text" placeholder="Email" name="email" value="{{$user['email']}}" readonly
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            <input type="password" placeholder="Password" name="password"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('password'))
                <p class="text-red-500">{{$errors->first('password')}}</p>
            @endif
            <select name="role"
                    class="block bg-white mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                @if($role['name'] =='admin')
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                @else
                    <option value="2">User</option>
                    <option value="1">Admin</option>
                @endif
            </select>
            <button type="submit"
                    class="mt-7 text-2xl font-bold w-64 md:w-535 py-4 bg-yellow-300 rounded-lg drop-shadow-xl shadow-black hover:opacity-80">
                Update
            </button>
        </form>
    </div>
@stop
