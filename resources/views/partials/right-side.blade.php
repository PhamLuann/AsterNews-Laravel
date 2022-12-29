<div class="lg:block lg:col-span-1 mt-16 pt-4">
    <!-- location -->
    <div class="hidden lg:block bg-white rounded p-4 relative">
        <div class="flex mb-2">
            <p class="text-md">Ha Noi, Viet Nam</p>
            <img src="{{asset('./img/icon/GPS.png')}}"
                 class="w-5 h-5 hidden xl:block absolute right-7 hover:cursor-pointer">
        </div>
        <hr>
        <div class="flex items-center mt-4">
            <div>
                <p>Sunny</p>
                <div class="flex font-bold mt-2 relative">
                    <p class="text-3xl">31</p>
                    <p class="text-sm font-normal">o</p>
                    <p class="absolute text-2xl right-12px bottom-0">c</p>
                </div>
            </div>
            <img src="{{asset('./img/icon/sun.png')}}" class="w-14 absolute right-3">
        </div>
        <div class="flex mt-4 text-sm">
            <p class="hover:cursor-pointer">Celsius</p>
            <p class="ml-6 opacity-30 hover:cursor-pointer">Fahrenheit</p>
        </div>
    </div>
    <!-- end location -->
    <div class="hidden lg:block bg-white rounded p-4 mt-4">
        <div class="flex">
            <img src="{{asset('./img/icon/feather.png')}}" class="w-6">
            <p class="ml-4">Become a Story Writer</p>
        </div>
        <div class="flex mt-3">
            <p class="w-32 text-xs opacity-60">Contribute stories and start earning.</p>
            <button class="ml-6 border rounded border-skyblue py-2.5 px-4 text-skyblue text-xs">Know More
            </button>
        </div>
    </div>
    <!-- quick byte -->
    <div class="hidden lg:block bg-white rounded p-4 mt-4 relative">
        <div class="flex items-center mb-2">
            <img src="{{asset('./img/icon/file-text.png')}}" alt="file text" class="w-5 h-5 mr-2">
            <p class="text-xs">Quick Bytes</p>
            <div class="flex absolute right-3">
                <div
                    class="w-6 h-6 bg-skyblue opacity-20 rounded-full flex items-center justify-center hover:cursor-pointer">
                    <img
                        src="{{asset('./img/icon/previous.png')}}" alt="previous" class="h-2 w-1"></div>
                <div class="w-6 h-6 bg-skyblue rounded-full flex items-center justify-center hover:cursor-pointer ml-2">
                    <img
                        src="{{asset('./img/icon/next.png')}}" alt="previous" class="h-2 w-1"></div>
            </div>
        </div>
        <hr>
        <div class="mt-3 mb-3 text-xs opacity-60 leading-5 text-justify">
            <p>
                The price of petrol remained unchanged on July 6 after reaching a new record high on the
                previous day, according to a price notification by state-owned fuel retailers. The diesel
                price remained stable for the second consecutive day.
            </p>
            <p class="mt-5">
                The increase on July 5, 35th in two months, took the petrol price in Delhi closer to Rs 100
                per litre-mark. The petrol price in the national capital soared to Rs 99.9 a litre and
                diesel was priced at Rs 89.4 per litre, according to Bharat Petroleum's price listing.
            </p>
        </div>
        <ul class="flex items-center justify-center">
            <li class="w-1 h-1 hover:w-1.5 hover:h-1.5 hover:cursor-pointer mr-2"><img
                    src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
            <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                <img src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
            <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                <img src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
            <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                <img src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
            <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                <img src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
            <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                <img src="{{asset('./img/icon/choose-icon.png')}}" alt="choose icon" class="w-full h-full"></li>
        </ul>
    </div>
    <!-- Subscribe -->
    <div class="w-full md:w-2/3 lg:w-full bg-white rounded px-4 py-6 mt-4 mx-auto">
        <p>Subscribe to our newsletter</p>
        <input type="text" placeholder="Enter Email"
               class="my-3 border focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-1 bg-sky-100 pl-3.5 w-full h-10 rounded">
        <button class="w-full h-10 text-white px-3 bg-skyblue rounded">Subscribe</button>
    </div>
</div>
