<div class="flex h-[35px]">
    <div class="flex w-3/4 items-center">
        <!-- search -->
        <div class="w-full lg:w-2/3 flex items-center">
            <input type="text" placeholder="Search for news.."
                   class="hidden lg:flex focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-1 text-sm bg-sky-100 pl-3.5 w-full h-11 rounded">
            <div class="absolute right-4/10 lg:right-[43%] xl:right-4/10 flex items-center">
                <button class="bottom-3"><img src="./img/icon/search-icon.png" class="w-5"></button>
            </div>
        </div>
        <!-- last new -->
        <div class="hidden lg:flex w-1/3 w-full h-11 rounded ml-5 border border-gray-400 flex align-middle relative">
            <a href="#" class="lg:text-xs xl:text-sm mx-3.5 flex items-center">
                <p>Latest news on</p>
                <p class="ml-1 text-sky-400">Covid-19</p>
                <img src="./img/icon/next-icon.png" class="w-5 absolute right-2">
            </a>
        </div>
    </div>
    <!-- user -->
    <div class="w-1/4 mr-4">
        <div class="h-full flex items-center float-right">
            <img src="./img/icon/person-icon.png" class="w-6">
            <a class="text-sm ml-4 lg:mr-9" href="{{route('login')}}">Login</a>
            <img src="./img/icon/down-icon.png" class="hidden lg:block w-4">
        </div>
    </div>
    <!-- end user -->
</div>
