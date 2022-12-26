@extends('admin.layouts.admin')
@section('title', 'Create User')
@section('content')
    <div class="min-h-screen">
        <div class="flex justify-center">
            <form action="{{route('user.postCreate')}}" method="post">
                @csrf
                <input type="text" placeholder="Name" name="name"
                       class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                <input type="text" placeholder="Email" name="email"
                       class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                <input type="text" placeholder="Password" name="password"
                       class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                <select name="role"
                        class="block bg-white mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                    <option value="2">User</option>
                    <option value="1">Admin</option>
                </select>
                <button type="submit"
                        class="mt-7 text-2xl font-bold w-64 md:w-535 py-4 bg-skyblue rounded-lg drop-shadow-xl shadow-black hover:opacity-80">
                    Create
                </button>
            </form>
        </div>
    </div>
@stop
