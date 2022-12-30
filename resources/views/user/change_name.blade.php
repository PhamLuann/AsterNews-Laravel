@extends('user.profile')
@section('title', 'Change Name')
@section('change')
    <div class="flex justify-center">
        <form action="{{route('user.doChangeName')}}" method="post">
            @csrf
            <label class="opacity-60" for="name">Name</label>
            <input type="text" placeholder="Name" id="name" name="name" value="{{$user['name'], old('name')}}"
                   class="block px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('name'))
                <p class="text-red-500">{{$errors->first('name')}}</p>
            @endif
            <button class="mt-4 px-8 py-2 bg-yellow-300 hover:bg-yellow-500 float-right rounded">Save change</button>
        </form>
    </div>
@stop
