<header class="px-[10%] flex w-full justify-between">
    <div class="flex items-center">
        <a class="flex items-center no-underline" href="{{route('home')}}">
            <img src="{{asset('./img/logo.png')}}" alt="logo" class="mr-4">
            <p class="text-lg text-primary font-bold m-0">Aster News</p>
        </a>
    </div>
    <div class="flex items-center relative hover:cursor-pointer">
        <img src="{{asset('./img/icon/person-icon.png')}}" alt="profile" class="w-6">
        @if(isset($_COOKIE['name']))
            <p class="mx-4">{{$_COOKIE['name']}}</p>
            <img id="view-profile" src="{{asset('./img/icon/down-icon.png')}}" alt="" class="w-4">
        @endif
        <div class="hidden" id="profile">
            <ul class="absolute top-10 right-0 bg-gray-500 p-4 rounded z-10">
                <li class=""><a href="{{route('user.profile')}}" class="text-black">Profile</a></li>
                <li class="mt-4"><a href="{{route('logout')}}" class="text-black">Logout</a></li>
            </ul>
        </div>
    </div>
</header>
