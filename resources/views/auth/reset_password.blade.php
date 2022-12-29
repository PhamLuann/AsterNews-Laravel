<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <title>Reset password</title>
</head>
<body class="flex justify-center bg-mainbg">
<div class="">
    <div class="flex items-center justify-center mt-10 w-64 md:w-535">
        <img src="{{asset('./img/splash-logo.png')}}" alt="logo" class="">
        <p class="text-primary font-bold text-[40px] hidden md:block">Aster News</p>
    </div>
    <div>
        @include('partials.__alert')
        <form action="{{route('password.reset.process')}}" method="post">
            @csrf
            <input type="password" placeholder="Password" name="password"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @error('password')
            <p class="text-red-600">
                {{ $message }}
            </p>
            @enderror
            <input type="password" placeholder="Confirm Password" name="password_confirm"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            @error('password_confirm')
            <p class="text-red-600">
                {{ $message }}
            </p>
            @enderror
            @if(session('errLogin'))
                <p class="mt-3 text-red-700">{{session('errLogin')}}</p>
            @endif
            <input type="text" value="{{$userId}}" name="userId" hidden>
            <input type="text" value="{{$code}}" name="code" hidden>
            <button type="submit"
                    class="mt-7 text-2xl font-bold w- md:w-535 py-4 bg-skyblue rounded-lg drop-shadow-xl shadow-black hover:opacity-80">
                Change
            </button>
        </form>
        <div class="flex items-center mt-4 w-64 md:w-535 justify-center">
            <a href="{{route('login')}}" class="text-green-500 font-bold">Sign in</a>
            <p class="mx-1">or</p>
            <a href="{{route('register.form')}}" class="text-skyblue font-bold">Register</a>
            <p class="ml-1">or Sign in with</p>
            <a href=""><img src="{{asset('./img/icon/facebook.png')}}" alt="facebook" class="w-5 mx-3.5"></a>
            <a href=""><img src="{{asset('./img/icon/google.png')}}" alt="google" class="w-5"></a>
        </div>
    </div>
</div>
<script>
    function check() {
        document.getElementById('remember').classList.toggle('hidden');
    }
</script>
</body>
</html>

