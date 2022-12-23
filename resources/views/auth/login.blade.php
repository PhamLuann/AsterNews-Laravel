<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <title>Login Aster News</title>
</head>
<body class="flex justify-center bg-mainbg">
<div class="">
    <div class="flex items-center justify-center mt-4 w-64 md:w-535">
        <img src="{{asset('./img/splash-logo.png')}}" alt="logo" class="">
        <p class="text-primary font-bold text-[40px] hidden md:block">Aster News</p>
    </div>
    <div>
        <form action="{{route('postLogin')}}" method="post" class="">
            @csrf
            <input type="text" placeholder="Email" name="email"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            <input type="password" placeholder="Password" name="password"
                   class="block mt-8 px-6 w-64 md:w-535 h-16 rounded-lg border border-black focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-2">
            <div class="w-64 md:w-535 mt-6 h-fit flex justify-between">
                <div onclick="check()" class="flex items-center hover:cursor-pointer relative">
                    <div class="w-4 h-4 bg-white rounded border border-black"></div>
                    <p class="text-xs ml-2.5">Remember me</p>
                    <i id="remember" class="absolute hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-check" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                        </svg>
                    </i>
                </div>
                <a class="text-xs text-skyblue" href="">Forgot password?</a>
            </div>
            <button type="submit"
                class="mt-7 text-2xl font-bold w-64 md:w-535 py-4 bg-skyblue rounded-lg drop-shadow-xl shadow-black hover:opacity-80">
                Login
            </button>
        </form>
        <div class="flex items-center mt-4 w-64 md:w-535 justify-center">
            <a href="{{route('register')}}" class="text-skyblue font-bold">Register</a>
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
