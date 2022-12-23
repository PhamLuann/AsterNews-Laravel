@extends('layouts.master')
@section('title', 'All Post')
@section('content')
    <div id="post" class="mt-6">
        <div id="post-1" class="w-full h-fit bg-white py-4 pr-3 pl-7 flex">
            <div class="basis-full lg:basis-4/5">
                <a href="{{route('showPost')}}">
                    <div id="content-sm" class="lg:hidden w-full">
                        <p class="font-medium text-lg flex hover:text-skyblue">Samsung Galaxy F22 launched
                            in India</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">Samsung Galaxy F22 has been launched
                            in
                            India. The new smartphone has been priced in the
                            mid-range segment.</p>
                    </div>
                    <div id="content-lg" class="hidden lg:block hover:cursor-pointer">
                        <p class="font-medium text-lg flex hover:text-skyblue">Samsung Galaxy F22 launched
                            in India: Price,
                            features, other details</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">Samsung Galaxy F22 has been launched
                            in
                            India. The new smartphone has been priced in the
                            mid-range segment. The new smartphone is powered by a MediaTek chipset and
                            features
                            a high
                            refresh rate AMOLED display.</p>
                    </div>
                </a>
                <div class="flex mt-4 w-full relative">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">The Mint</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>15 mins ago</p>
                    </div>
                    <div
                        class="flex items-center text-primary text-xs absolute right-0 xl:right-40 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden lg:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden lg:block">Read Later</p>
                    </div>
                </div>
            </div>
            <a href="news-feed.html">
                <img src="./img/post/post1.png"
                     class="hidden sm:block basis-1/5 ml-2 w-44 h-32 min-h-fit hover:cursor-pointer">
            </a>
        </div>
        <!-- row 2 -->
        <div class="md:grid md:grid-cols-2 gap-5">
            <div id="post-2" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex grid grid-cols-10 gap-2">
                    <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                        <p class="font-medium text-lg flex">Battlegrounds Mobile India iOS release date</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">The reason behind their
                            disappointment is
                            that iPhone users have been..
                        </p>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-4">
                        <img src="./img/post/post2.png"
                             class="ml-4 w-full h-full hover:cursor-pointer">
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">Sport Biz</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>42 mins ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>

            <div id="post-3" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex grid grid-cols-10 gap-2">
                    <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                        <p class="font-medium text-lg flex">Instagram working on ‘Exclusive Stories’ for
                            subscribers</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">Instagram could be jumping on the
                            paid subscription..
                        </p>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-4">
                        <img src="./img/post/post3.png"
                             class="ml-4 w-full h-full hover:cursor-pointer">
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">The Mint</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>52 mins ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row 2 -->
        <!-- row 3 -->
        <div class="md:grid md:grid-cols-2 gap-5">
            <div id="post-4" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex">
                    <div class="hover:cursor-pointer">
                        <p class="font-medium text-lg flex">Petrol, diesel prices - July 6: Fuel prices
                            unchanged after touching record high</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">The price of petrol remained
                            unchanged on July 6 after reaching a new record high on the previous day
                        </p>
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">Radar 52</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>1 hour ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>

            <div id="post-5" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex grid grid-cols-10 gap-2">
                    <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                        <p class="font-medium text-lg flex">Android smartphone users alert! Remove these 9
                            apps now</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">Stealer trojans were spread as
                            harmless software, Remove these 9 apps now..
                        </p>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-4">
                        <img src="./img/post/post5.png"
                             class="ml-4 w-full h-full hover:cursor-pointer">
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">Live Mint</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>2 hours ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row 3 -->
        <!-- row 4 -->
        <div class="md:grid md:grid-cols-2 gap-5">
            <div id="post-6" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex grid grid-cols-10 gap-2">
                    <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                        <p class="font-medium text-lg flex">How to install Windows 11 on almost any
                            unsupported PC
                        </p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">Microsoft is allowing some
                            unsupported computers..
                        </p>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-4">
                        <img src="./img/post/post6.png"
                             class="ml-4 w-full h-full hover:cursor-pointer">
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">Tech Mint</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>3 hours ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>

            <div id="post-7" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                <div class="flex grid grid-cols-10 gap-2">
                    <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                        <p class="font-medium text-lg flex">This charging feature from Android phones</p>
                        <p class="mt-2.5 text-sm leading-6 opacity-60">You will always find a set of people
                            who will say that..
                        </p>
                    </div>
                    <div class="col-span-4 sm:col-span-2 md:col-span-4">
                        <img src="./img/post/post7.png"
                             class="ml-4 w-full h-full hover:cursor-pointer">
                    </div>
                </div>
                <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                    <div class="flex items-center text-xs opacity-40">
                        <p class="mr-2.5">Live Mint</p>
                        <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                        <p>5 hours ago</p>
                    </div>
                    <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                        <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                        <p class="hidden xl:block">Share</p>
                        <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                        <p class="hidden xl:block">Read Later</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row 4 -->
    </div>
    <!-- end post -->
    <!-- row 5 -->
    <div class="md:grid md:grid-cols-2 gap-5">
        <div id="post-8" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
            <div class="flex grid grid-cols-10 gap-2">
                <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                    <p class="font-medium text-lg flex">INDvENG Tests to be played in front of crowd
                    </p>
                    <p class="mt-2.5 text-sm leading-6 opacity-60">The 5-Test series between India & England
                        is set to be played in front of packed..
                    </p>
                </div>
                <div class="col-span-4 sm:col-span-2 md:col-span-4">
                    <img src="./img/post/post8.png"
                         class="ml-4 w-full h-full hover:cursor-pointer">
                </div>
            </div>
            <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                <div class="flex items-center text-xs opacity-40">
                    <p class="mr-2.5">Sport Biz</p>
                    <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                    <p>7 hours ago</p>
                </div>
                <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                    <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                    <p class="hidden xl:block">Share</p>
                    <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                    <p class="hidden xl:block">Read Later</p>
                </div>
            </div>
        </div>

        <div id="post-9" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
            <div class="flex grid grid-cols-10 gap-2">
                <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                    <p class="font-medium text-lg flex">The 10 Coolest Wearable Tech Gadgets Of 2021 (So
                        Far)</p>
                    <p class="mt-2.5 text-sm leading-6 opacity-60">Driven by demand for connected earbuds
                        and a..
                    </p>
                </div>
                <div class="col-span-4 sm:col-span-2 md:col-span-4">
                    <img src="./img/post/post9.png"
                         class="ml-4 w-full h-full hover:cursor-pointer">
                </div>
            </div>
            <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                <div class="flex items-center text-xs opacity-40">
                    <p class="mr-2.5">The Mint</p>
                    <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                    <p>7 hours ago</p>
                </div>
                <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                    <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                    <p class="hidden xl:block">Share</p>
                    <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                    <p class="hidden xl:block">Read Later</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end row 5 -->
    <div class="flex justify-center mt-12">
        <div class="flex">
            <a href=""><img src="{{asset('./img/icon/left.png')}}" class="rounded-l-md border border-gray-500 p-2 hover:opacity-60"></a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">1</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">2</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">3</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">4</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">...</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">998</a>
            <a href="" class="border border-gray-500 w-8 h-[35px] flex items-center justify-center hover:opacity-60">999</a>
            <a href=""><img src="{{asset('./img/icon/right.png')}}" class="rounded-r-md border border-gray-500 p-2 hover:opacity-60"></a>
        </div>
    </div>
@stop
