@extends('user.profile')
@section('title', 'Change Password')
@section('change')
    <div class="flex justify-center">
        <form action="{{route('user.doChangePassword')}}" method="post">
            @csrf
            <label class="opacity-60" for="old-password">Current Password</label>
            <input type="password" placeholder="Current Password" id="old-password" name="current-password"
                   class="block px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('current-password'))
                <p class="text-red-500">{{$errors->first('current-password')}}</p>
            @endif
            <div class="mt-4">
                <label class="opacity-60" for="new-password">New Password</label>
                <input type="password" placeholder="New Password" id="new-password" name="new-password"
                       class="block px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                @if($errors->first('new-password'))
                    <p class="text-red-500">{{$errors->first('new-password')}}</p>
                @endif
            </div>
            <div class="mt-4">
                <label class="opacity-60" for="confirm-password">Confirm New Password</label>
                <input type="password" placeholder="Confirm new password" id="confirm-password" name="confirm-password"
                       class="block px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
                @if($errors->first('confirm-password'))
                    <p class="text-red-500">{{$errors->first('confirm-password')}}</p>
                @endif
            </div>
            <button class="mt-4 px-8 py-2 bg-yellow-300 hover:bg-yellow-500 float-right rounded">Save change</button>
        </form>
    </div>
@stop
