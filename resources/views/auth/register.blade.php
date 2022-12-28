<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <title>Register Aster News</title>
</head>
<body class="flex justify-center bg-mainbg">
<div class="">
    <div class="flex items-center justify-center mt-4 w-64 md:w-535">
        <img src="{{asset('./img/splash-logo.png')}}" alt="logo" class="w-36">
        <p class="text-primary font-bold text-[40px] hidden md:block">Aster News</p>
    </div>
    <div>
        @include('partials.__alert')
        <form action="{{route('register.process')}}" method="post">
            @csrf
            <input type="text" placeholder="Email" name="email" value="{{old('email')}}"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if(session('emailErr'))
                <p class="text-red-500">{{session('emailErr')}}</p>
            @endif
            @if($errors->first('email'))
                <p class="text-red-500">{{$errors->first('email')}}</p>
            @endif
            <input type="text" placeholder="Name" name="name" value="{{old('name')}}"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('name'))
                <p class="text-red-500">{{$errors->first('name')}}</p>
            @endif
            <input type="password" placeholder="Password" name="password"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @if($errors->first('password'))
                <p class="text-red-500">{{$errors->first('password')}}</p>
            @endif
            <button type="submit"
                class="mt-7 text-2xl font-bold w-64 md:w-535 py-4 bg-skyblue rounded-lg drop-shadow-xl shadow-black hover:opacity-80">
                Register
            </button>
        </form>
        <div class="flex items-center mt-4 w-64 md:w-535 justify-center">
            <a href="{{route('login')}}" class="text-skyblue font-bold">Sign in</a>
            <p class="ml-1">or Register with</p>
            <a href=""><img src="{{asset('./img/icon/facebook.png')}}" alt="facebook" class="w-5 mx-3.5"></a>
            <a href=""><img src="{{asset('./img/icon/google.png')}}" alt="google" class="w-5"></a>
        </div>
    </div>
</div>
</body>
</html>
