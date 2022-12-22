<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/tailwind.css')}}">
    <script src="{{asset('/js/main.js')}}" async></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>News Dashboard</title>
</head>

<body class="bg-mainbg">
<div class="lg:grid lg:grid-cols-5 lg:gap-11 relative">
    <!-- left side menu -->
    <div id="layer" class="lg:col-span-1 absolute lg:relative z-10">
        <div class="">
            <div id="small-logo" class="lg:hidden ml-3.5 flex items-center">
                <button id="menu_btn"><img src="./img/icon/menu-icon.png" class="w-6 mr-4"></button>
                <img src="./img/logo.png" alt="logo">
            </div>
            <div id="menu" class="hidden lg:block pb-10">
                <div id="large" class="ml-8 flex items-center pt-5">
                    <img src="./img/logo.png" alt="logo">
                    <p class="ml-3.5 font-bold text-lg text-primary">Aster News</p>
                </div>
                <ul class="mt-7 font-normal mr-11 lg:mr-0">
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer select-menu">
                        <img src="./img/icon/home.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Top Stories</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/global.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Around the World</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 pr-20 hover:cursor-pointer">
                        <img src="./img/icon/business.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Business</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/health.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Health</p>
                    </li>
                    <hr class="mr-4">
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/shield.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Covid 19</p>
                    </li>
                    <hr class="mr-4">
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/video.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Entertainment</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/award.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Sports</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/message.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Discussion</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/bell.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">Notification</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/setting.png" class="w-5 ml-6">
                        <p class="text-sm ml-2 xl:ml-8">News Feed Settings</p>
                    </li>
                </ul>
                <div class="w-full h-full flex justify-center lg:justify-start lg:ml-7">
                    <div class="w-fit h-fit rounded bg-skyblue mt-8 pb-4  text-white">
                        <div class="flex items-center mx-2 xl:mx-5">
                            <img src="./img/icon/gift.png" class="w-6 mt-5">
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
    <!-- end left side menu -->
    <!-- main side -->
    <div class="col-span-4 mt-4 mr-4 ml-4 lg:ml-0">
        <!-- header -->
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
                    <p class="text-sm ml-4 lg:mr-9">My Profile</p>
                    <img src="./img/icon/down-icon.png" class="hidden lg:block w-4">
                </div>
            </div>
            <!-- end user -->
        </div>
        <!--end header-->
        <!-- content -->
        <div class="lg:grid lg:grid-cols-4 lg:gap-11">
            <div class="col-span-3">
                <!-- top-items -->
                <div id="top-items">
                    <p class="font-bold text-xl mt-9">Top Stories for you</p>
                    <div class="">
                        <ul id="tag-items" class="slick text-center mt-5 flex justify-between items-center">
                            <li class="item select-top-items h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">All</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">Android</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">Cricket</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">iPhone</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">Google</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">Nano Technology</li>
                            <li class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5">Mental Health</li>
                            <li class="item h-full w-fit py-1.5 px-4 rounded-3xl"><img src="./img/icon/more.png"
                                                                                       class="w-4 mt-2"></li>
                        </ul>
                    </div>
                </div>
                <!-- end top-items -->
                <!-- post -->
                <div id="post" class="mt-6">
                    <div id="post-1" class="w-full h-fit bg-white py-4 pr-3 pl-7 flex">
                        <div class="basis-full lg:basis-4/5">
                            <a href="news-feed">
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
                                <div class="flex items-center text-primary text-xs absolute right-0 xl:right-40 hover:cursor-pointer">
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
                <!-- follow -->
                <div class="my-11">
                    <div class="flex items-center justify-between">
                        <div class="flex">
                            <img src="./img/icon/feather.png" class="w-6 h-6">
                            <p class="ml-4">Creators you should follow</p>
                        </div>
                        <div class="flex">
                            <a href="#"><img src="./img/icon/to-left.png" class="w-5 h-5 mr-6"></a>
                            <a href="#"><img src="./img/icon/to-right.png" class="w-5 h-5"></a>
                        </div>
                    </div>
                    <div class="follow flex mt-3 justify-between">
                        <div class="bg-white p-3 text-center mr-3">
                            <img src="./img/follow/Shan-teylor.png" class="w-70 mx-auto">
                            <p class="mt-2 font-medium ">Shan Teylor</p>
                            <p class="text-xs opacity-40">Tech Mint</p>
                            <button class="mt-2 mx-auto text-white bg-skyblue py-2 px-8 rounded">Follow</button>
                        </div>
                        <div class="bg-white p-3 text-center mr-3">
                            <img src="./img/follow/mary-angela.png" class="w-70 mx-auto">
                            <p class="mt-2 font-medium ">Mary Angela</p>
                            <p class="text-xs opacity-40">Live Mint</p>
                            <button class="mt-2 mx-auto text-white bg-skyblue py-2 px-8 rounded">Follow</button>
                        </div>
                        <div class="bg-white p-3 text-center mr-3">
                            <img src="./img/follow/kyon-cho-chi.png" class="w-70 mx-auto">
                            <p class="mt-2 font-medium ">Kyon Cho Chi</p>
                            <p class="text-xs opacity-40">Bizz Daily</p>
                            <button class="mt-2 mx-auto text-white bg-skyblue py-2 px-8 rounded">Follow</button>
                        </div>
                        <div class="bg-white p-3 text-center mr-3">
                            <img src="./img/follow/Paul-livingStone.png" class="w-70 mx-auto">
                            <p class="mt-2 font-medium ">Paul Living</p>
                            <p class="text-xs opacity-40">Sport Biz</p>
                            <button class="mt-2 mx-auto text-white bg-skyblue py-2 px-8 rounded">Follow</button>
                        </div>
                        <div class="bg-white p-3 text-center">
                            <img src="./img/follow/sara-jay.png" class="w-70 mx-auto">
                            <p class="mt-2 font-medium ">Sara Jay</p>
                            <p class="text-xs opacity-40">Radar 52</p>
                            <button class="mt-2 mx-auto text-white bg-skyblue py-2 px-8 rounded">Follow</button>
                        </div>
                        <div></div>
                    </div>
                </div>
                <!-- end follow -->
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
                <!-- end row 6 -->
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div id="post-10" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                        <div class="flex">
                            <div class="hover:cursor-pointer">
                                <p class="font-medium text-lg flex">Biden's cold response to Afghanistan's collapse to
                                    have far consequences
                                </p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">When US President Joe Biden chose in
                                    April to withdraw all American forces from Afghanistan by September, we were among
                                    those who judged..
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                            <div class="flex items-center text-xs opacity-40">
                                <p class="mr-2.5">Radar 52</p>
                                <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                                <p>8 hours ago</p>
                            </div>
                            <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                                <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                                <p class="hidden xl:block">Share</p>
                                <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                                <p class="hidden xl:block">Read Later</p>
                            </div>
                        </div>
                    </div>

                    <div id="post-11" class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                        <div class="flex grid grid-cols-10 gap-2">
                            <div class="hover:cursor-pointer col-span-6 sm:col-span-8 md:col-span-6">
                                <p class="font-medium text-lg flex">Hardik Pandya 'is bowling and it is a very good
                                    sign' - Suryakumar</p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">I think that the team management and
                                    Hardik. The 5-Test series between India & England is set to be played in front of
                                    packed..
                                </p>
                            </div>
                            <div class="col-span-4 sm:col-span-2 md:col-span-4">
                                <img src="./img/post/post11.png"
                                     class="ml-4 w-full h-full hover:cursor-pointer">
                            </div>
                        </div>
                        <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                            <div class="flex items-center text-xs opacity-40">
                                <p class="mr-2.5">Cric Mint</p>
                                <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                                <p>9 hours ago</p>
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
                <!-- end row 6 -->
                <div class="flex justify-center">
                    <button class="mt-11 rounded border border-slate-400 px-5 py-2.5 hover:border-sky-400 hover:text-sky-400">
                        Show More
                    </button>
                </div>
            </div>
            <!-- right side -->
            <div class="lg:block lg:col-span-1 mt-16 pt-4">
                <!-- location -->
                <div class="hidden lg:block bg-white rounded p-4 relative">
                    <div class="flex mb-2">
                        <p class="text-md">Ha Noi, Viet Nam</p>
                        <img src="./img/icon/GPS.png"
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
                        <img src="./img/icon/sun.png" class="w-14 absolute right-3">
                    </div>
                    <div class="flex mt-4 text-sm">
                        <p class="hover:cursor-pointer">Celsius</p>
                        <p class="ml-6 opacity-30 hover:cursor-pointer">Fahrenheit</p>
                    </div>
                </div>
                <!-- end location -->
                <div class="hidden lg:block bg-white rounded p-4 mt-4">
                    <div class="flex">
                        <img src="./img/icon/feather.png" class="w-6">
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
                        <img src="./img/icon/file-text.png" alt="file text" class="w-5 h-5 mr-2">
                        <p class="text-xs">Quick Bytes</p>
                        <div class="flex absolute right-3">
                            <div class="w-6 h-6 bg-skyblue opacity-20 rounded-full flex items-center justify-center hover:cursor-pointer">
                                <img
                                    src="./img/icon/previous.png" alt="previous" class="h-2 w-1"></div>
                            <div class="w-6 h-6 bg-skyblue rounded-full flex items-center justify-center hover:cursor-pointer ml-2">
                                <img
                                    src="./img/icon/next.png" alt="previous" class="h-2 w-1"></div>
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
                                src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
                        <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                            <img src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
                        <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                            <img src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
                        <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                            <img src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
                        <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                            <img src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
                        <li class="w-0.5 h-0.5 hover:w-1 hover:h-1 hover:cursor-pointer opacity-40 hover:opacity-100 mr-2">
                            <img src="./img/icon/choose-icon.png" alt="choose icon" class="w-full h-full"></li>
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
            <!-- end right side -->
        </div>
        <!-- end content -->
    </div>
    <!-- end main side -->
</div>
<div class="lg:grid lg:grid-cols-5 lg:gap-11">
    <div></div>
    <div class="col-span-4 lg:grid lg:grid-cols-4 lg:gap-11">
        <div class="col-span-3">
            <footer class="mt-20 mx-4">
                <hr>
                <div class="mt-6 mb-8 flex text-xs opacity-40 justify-between">
                    <div>
                        <p>© Aster News, 2022</p>
                    </div>
                    <div class="w-1/2 sm:w-1/3 xl:w-1/4 flex justify-between">
                        <p>Privacy Policy</p>
                        <p>Terms of Service</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('./js/top-items.js')}}"></script>
</body>

</html>
