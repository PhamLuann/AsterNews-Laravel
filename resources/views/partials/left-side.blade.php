<div id="layer" class="lg:col-span-1 absolute lg:relative z-20">
    <div class="sticky top-0">
        <div id="small-logo" class="lg:hidden ml-3.5 flex items-center">
            <button id="menu_btn"><img src="{{asset('./img/icon/menu-icon.png')}}" class="w-6 mr-4"></button>
            <a href="{{route('home')}}"><img src="{{asset('./img/logo.png')}}" alt="logo"></a>
        </div>
        <div id="menu" class="hidden lg:block pb-10">
            <a id="large" class="ml-8 flex items-center pt-5" href="{{route('home')}}">
                <img src="{{asset('./img/logo.png')}}" alt="logo">
                <p class="ml-3.5 font-bold text-lg text-primary">Aster News</p>
            </a>
            <ul class="mt-7 font-normal mr-11 lg:mr-0">
                <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer select-menu">
                    <img src="{{asset('./img/icon/home.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Top Stories</p>
                </li>
                <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                    <img src="{{asset('./img/icon/global.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Around the World</p>
                </li>
                <li class="flex items-center py-4 pl-3.5 pr-20 hover:cursor-pointer">
                    <img src="{{asset('./img/icon/business.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Business</p>
                </li>
                <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                    <img src="{{asset('./img/icon/health.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Health</p>
                </li>
                <hr class="mr-4">
                <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                    <img src="{{asset('./img/icon/shield.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Covid 19</p>
                </li>
                <hr class="mr-4">
                <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                    <img src="{{asset('./img/icon/video.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Entertainment</p>
                </li>
                <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                    <img src="{{asset('./img/icon/award.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Sports</p>
                </li>
                <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                    <img src="{{asset('./img/icon/message.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Discussion</p>
                </li>
                <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                    <img src="{{asset('./img/icon/bell.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">Notification</p>
                </li>
                <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                    <img src="{{asset('./img/icon/setting.png')}}" class="w-5 ml-6">
                    <p class="text-sm ml-2 xl:ml-8">News Feed Settings</p>
                </li>
            </ul>
            <div class="w-full h-full flex justify-center lg:justify-start lg:ml-7">
                <div class="w-fit h-fit rounded bg-skyblue mt-8 pb-4  text-white">
                    <div class="flex items-center mx-2 xl:mx-5">
                        <img src="{{asset('./img/icon/gift.png')}}" class="w-6 mt-5">
                        <p class="mt-5 ml-2 text-xs xl:text-sm">Subscribe to Premium</p>
                    </div>
                    <div class="flex items-center mt-3.5 mx-2 xl:mx-5">
                        <p class="text-3xl font-bold">$8</p>
                        <p class="mt-2.5">/m</p>
                        <button class="bg-primary ml-2 rounded xl:text-xl py-2.5 px-7 lg:px-3">Upgrade</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
