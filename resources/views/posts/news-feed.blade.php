<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/tailwind.css')}}">
    <script src="{{asset('./js/main.js')}}" async></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>News Feed</title>
</head>

<body class="bg-mainbg text-amberblack">
<div class="lg:grid lg:grid-cols-5 lg:gap-11 relative">
    <!-- left side menu -->
    <div id="layer" class="lg:col-span-1 absolute lg:relative z-10">
        <div class="">
            <div id="small-logo" class="lg:hidden ml-3.5 flex items-center">
                <button id="menu_btn"><img src="./img/icon/menu-icon.png" class="w-6 mr-4"></button>
                <a href="index.html"><img src="./img/logo.png" alt="logo"></a>
            </div>
            <div id="menu" class="hidden lg:block pb-10">
                <a id="large" class="ml-8 flex items-center pt-5" href="index.html">
                    <img src="./img/logo.png" alt="logo">
                    <p class="ml-3.5 font-bold text-lg text-primary">Aster News</p>
                </a>
                <ul class="mt-7 font-normal">
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer select-menu">
                        <img src="./img/icon/home.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Top Stories</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/global.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Around the World</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 pr-20 hover:cursor-pointer">
                        <img src="./img/icon/business.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Business</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/health.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Health</p>
                    </li>
                    <hr class="mr-4">
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/shield.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Covid 19</p>
                    </li>
                    <hr class="mr-4">
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/video.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Entertainment</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/award.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Sports</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/message.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Discussion</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5  hover:cursor-pointer">
                        <img src="./img/icon/bell.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">Notification</p>
                    </li>
                    <li class="flex items-center py-4 pl-3.5 hover:cursor-pointer">
                        <img src="./img/icon/setting.png" class="w-5 ml-6">
                        <p class="text-sm ml-8">News Feed Settings</p>
                    </li>
                </ul>
                <div class="w-fit h-fit rounded bg-skyblue mt-8 pb-4 lg:mt-32 ml-6 xl:ml-2 xl:ml-5 lg:mr-5 text-white">
                    <div class="flex items-center mx-2 xl:mx-5">
                        <img src="./img/icon/gift.png" class="w-6 mt-5">
                        <p class="mt-5 ml-4 text-xs xl:text-sm">Subscribe to Premium</p>
                    </div>
                    <div class="flex items-center mt-3.5 mx-2 xl:mx-5">
                        <p class="text-3xl font-bold">$8</p>
                        <p class="mt-2.5">/m</p>
                        <button class="bg-primary ml-5 rounded text-xs xl:text-xl py-2.5 px-7">Upgrade</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end left side menu -->
    <!-- main side -->
    <div class="col-span-4 mt-4 mr-4 ml-4 lg:ml-0">
        <div class="flex">
            <div class="flex w-3/4 items-center">
                <!-- search -->
                <div class="w-full lg:w-2/3 flex items-center">
                    <input type="text" placeholder="Search for news.."
                           class="hidden lg:flex focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-1 text-sm bg-sky-100 pl-3.5 w-full h-11 rounded">
                    <div class="absolute right-4/10 flex items-center">
                        <button class="bottom-3"><img src="./img/icon/search-icon.png" class="w-5"></button>
                    </div>
                </div>
                <!-- last new -->
                <div
                    class="hidden lg:flex w-1/3 w-full h-11 rounded ml-5 border border-gray-400 flex align-middle relative">
                    <a href="#" class="text-sm mx-3.5 flex items-center">
                        <p>Latest news on</p>
                        <p class="ml-1 text-sky-400">Covid-19</p>
                        <img src="./img/icon/next-icon.png" class="w-5 absolute right-4">
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
        <!-- content -->
        <div class="lg:grid lg:grid-cols-4 lg:gap-11">
            <div class="col-span-3">
                <!-- post -->
                <div id="post" class="mt-6">
                    <div id="post-1" class="w-full h-fit py-4">
                        <p class="text-[26px] font-bold leading-[34px]">Leak: Samsung to announce the Z Fold 3 and
                            Galaxy Watch 4 in August</p>
                        <div class="mt-3.5 flex text-skyblue text-xs">
                            <a href="#" class="bg-sky-100 rounded py-1 px-3 mr-2.5 hover:bg-sky-200">Tech</a>
                            <a href="#" class="bg-sky-100 rounded py-1 px-3 mr-2.5 hover:bg-sky-200">Mobile</a>
                        </div>
                        <p class="mt-5 text-17 opacity-60">Samsung's next Unpacked event reportedly lands August 11</p>
                        <img src="./img/post/galaxy-zfold.png" class="mt-9 w-fit rounded">
                        <div class="text-17 mt-10">
                            <p class="opacity-60">Samsung had a pretty quiet Mobile World Congress event, but it did
                                tell us we’d learn
                                more about its upcoming Google-approved smartwatch at its next Unpacked event.
                                Unfortunately, the company didn’t tell us when exactly that would be, but a new report
                                from Korean publication DigitalDaily News (via 9to5Google) claims the next Unpacked will
                                take place on August 11, at 10 AM ET.
                            </p>
                            <p class="mt-7 opacity-60">According to the report, Samsung will be launching five devices
                                at the event:
                            </p>
                            <div class="mt-6 flex items-center">
                                <div class="w-[13px] h-[13px] bg-skyblue"></div>
                                <p class="ml-4 opacity-60">Galaxy X Fold 3</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="w-[13px] h-[13px] bg-skyblue"></div>
                                <p class="ml-4 opacity-60">Galaxy X Flip 3</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="w-[13px] h-[13px] bg-skyblue"></div>
                                <p class="ml-4 opacity-60">Galaxy Watch 4</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="w-[13px] h-[13px] bg-skyblue"></div>
                                <p class="ml-4 opacity-60">Galaxy Watch 4</p>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="w-[13px] h-[13px] bg-skyblue"></div>
                                <p class="ml-4 opacity-60">Galaxy Buds 2</p>
                            </div>
                        </div>
                        <div class="opacity-60 mt-8">
                            <p>Notably, the new Galaxy Watches will be Samsung’s first to not use Tizen OS. Google
                                collaborated with Samsung to revamp Wear OS from the ground up, making it smoother and
                                more efficient.</p>
                            <p class="mt-7">Hopefully, the devices are able to maintain the long battery life Samsung’s
                                smartwatches
                                have been known for, while having much greater compatibility with smartwatch apps via
                                Wear OS. That said, the watch will use a custom One UI Watch skin — because it wouldn’t
                                be Samsung if it didn’t put its own twist on the software.</p>
                            <p class="mt-7">As for the Z Fold 3, it’s expected to be a refinement of the original Fold’s
                                concept without major changes to the form factor. The biggest change aside from the
                                expected
                                spec bump is that the Z Fold 3 will support the S-Pen.</p>
                            <p class="mt-7">The event will reportedly be broadcast via YouTube, as per usual, and there
                                is no indication the company plans to hold a concurrent physical event. With the rumored
                                date a little over a month away, I’d expect an official announcement from Samsung within
                                the next week or two.
                            </p>
                        </div>
                        <div class="mt-9 flex justify-center text-xs opacity-30">
                            <p>Published July 5, 2021 - 8:16 pm IST</p>
                        </div>
                        <div class="mt-2 flex justify-center text-xs">
                            <p>by John Abraham</p>
                        </div>
                        <div class="mt-2 flex justify-center text-xs text-skyblue">
                            <a href="#" class="underline decoration-solid">Back to top</a>
                        </div>
                    </div>
                </div>
                <!-- end post -->
                <!-- comment -->
                <div>
                    <div class="flex items-center relative">
                        <p class="text-17 font-bold">Add your comment</p>
                        <div class="h-[0.1px] w-1/2 sm:w-2/3 md:w-3/4 lg:w-2/3 2xl:w-9/12 bg-amberblack absolute right-0"></div>
                    </div>
                    <form action="">
                        <textarea name="comment" rows="4"
                                  class="mt-3 w-full px-5 py-2.5 bg-[#ECF5F8] rounded focus:outline-none focus:border-sky-700 focus:ring-sky-500 focus:ring-1"
                                  placeholder="Enter your comment here.."></textarea>
                        <button class="mt-2.5 px-[30px] py-2.5 rounded bg-skyblue text-white hover:opacity-80">Post
                            Comment
                        </button>
                    </form>
                    <div id="view-comment" class="flex items-center text-17 text-skyblue mt-5 hover:cursor-pointer">
                        <p class="underline decoration-solid">View All Comments</p>
                        <p class="ml-2">(04)</p>
                        <div class="bg-skyblue ml-2.5 rounded-full w-6 h-6 flex items-center justify-center">
                            <img src="./img/icon/down.png" class="w-2.5 h-1.5">
                        </div>
                    </div>
                    <div id="comment" class="hidden">
                        <div id="hide-comment" class="flex items-center text-17 text-skyblue mt-5 hover:cursor-pointer">
                            <p class="underline decoration-solid">Hide Comments</p>
                            <div class="bg-skyblue ml-2.5 rounded-full w-6 h-6 flex items-center justify-center">
                                <img src="./img/icon/up.png" class="w-2.5 h-1.5">
                            </div>
                        </div>
                        <div class="mt-2">
                            <div id="comment-1" class="mt-7">
                                <!-- comment contex -->
                                <div class="flex items-center justify-between">
                                    <p class="text-skyblue text-17 font-medium">Rakshan (You)</p>
                                    <div class="flex">
                                        <img src="./img/icon/like.png" class="w-4 h-4 mr-4 hover:cursor-pointer">
                                        <img src="./img/icon/dislike.png" class="w-4 h-4 hover:cursor-pointer">
                                    </div>
                                </div>
                                <p class="mt-2.5">I’ve been a great fan of Samsung products since 2010. Can’t wait for
                                    this one. 🔥🔥🔥</p>
                                <div class="flex items-center justify-between mt-2.5">
                                    <p class="text-xs opacity-30">Posted on Jul 5, 2021 | 6:22 AM</p>
                                    <!-- delete comment -->
                                    <div class="flex items-center text-pink hover:cursor-pointer">
                                        <img src="./img/icon/delete.png" class="w-5 h-5 mr-1.5">
                                        <p class="underline decoration-solid">Delete Comment</p>
                                    </div>
                                    <!-- end delete comment -->
                                </div>
                                <!-- end comment context -->
                                <button class="mt-3 text-skyblue text-sm">Reply</button>
                                <div class="mt-5 flex items-center">
                                    <div class="w-0.5 min-h-[135px] bg-[#FFE8C4]"></div>
                                    <!-- comment contex -->
                                    <div class="w-full ml-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-skyblue text-17 font-medium">Sharma KL</p>
                                            <div class="flex">
                                                <img src="./img/icon/like.png"
                                                     class="w-4 h-4 mr-4 hover:cursor-pointer">
                                                <img src="./img/icon/dislike.png" class="w-4 h-4 hover:cursor-pointer">
                                            </div>
                                        </div>
                                        <p class="mt-2.5">This Samsung Fold packs plenty of power into its small stature
                                            and
                                            sets the stage for better 5G phone performance in the future.</p>
                                        <div class="flex items-center justify-between mt-2.5">
                                            <p class="text-xs opacity-30">Posted on Jul 5, 2021 | 6:55 AM</p>
                                        </div>
                                        <button class="mt-3 text-skyblue text-sm">Reply</button>
                                    </div>
                                    <!-- end comment context -->
                                </div>
                            </div>
                            <div id="comment-2" class="mt-7">
                                <!-- comment contex -->
                                <div class="flex items-center justify-between">
                                    <p class="text-skyblue text-17 font-medium">Yokesh Mat</p>
                                    <div class="flex">
                                        <img src="./img/icon/like.png" class="w-4 h-4 mr-4 hover:cursor-pointer">
                                        <img src="./img/icon/dislike.png" class="w-4 h-4 hover:cursor-pointer">
                                    </div>
                                </div>
                                <p class="mt-2.5">Thinking of buying the Z fold 2. Is it any good? or should I wait for
                                    fold
                                    3?</p>
                                <div class="flex items-center justify-between mt-2.5">
                                    <p class="text-xs opacity-30">Posted on Jul 4, 2021 | 1:12 AM</p>
                                </div>
                                <!-- end comment context -->
                                <button class="mt-3 text-skyblue text-sm">Reply</button>
                                <div class="mt-5 flex items-center">
                                    <div class="w-0.5 min-h-[135px] bg-[#FFE8C4]"></div>
                                    <!-- comment contex -->
                                    <div class="w-full ml-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-skyblue text-17 font-medium">Sharath</p>
                                            <div class="flex">
                                                <img src="./img/icon/like.png"
                                                     class="w-4 h-4 mr-4 hover:cursor-pointer">
                                                <img src="./img/icon/dislike.png" class="w-4 h-4 hover:cursor-pointer">
                                            </div>
                                        </div>
                                        <p class="mt-2.5">The Samsung Galaxy Z Fold 2 fixes many of the flaws of the
                                            original to deliver a foldable big-screen experience that really works, for
                                            the
                                            first folding phone we recommend.</p>
                                        <div class="flex items-center justify-between mt-2.5">
                                            <p class="text-xs opacity-30">Posted on Jul 4, 2021 | 2:51 AM</p>
                                        </div>
                                        <button class="mt-3 text-skyblue text-sm">Reply</button>
                                    </div>
                                    <!-- end comment context -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end comment-->
                </div>
                <!-- subcribe -->
                <div class="w-full mt-12 p-8 bg-[#FFE8C5] rounded relative flex justify-center text-center lg:justify-start lg:text-start">
                    <div class="flex items-center w-full">
                        <div class="w-full">
                            <p class="font-bold">Subscribe to our newsletter</p>
                            <form action="" class="mt-3 lg:flex">
                                <input type="text" placeholder="Enter Email"
                                       class="w-full lg:w-1/3 xl:w-1/2 h-11 rounded pl-3">
                                <div>
                                    <button class="w-full px-6 py-2.5 ml-0 mt-3 lg:ml-3 lg:mt-0 bg-skyblue rounded text-white">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                        <img src="./img/post/mail.png" class="hidden lg:block w-[170px] h-28 absolute right-6">
                    </div>
                </div>
                <!-- end subcribe -->
                <div class="flex items-center relative mt-14">
                    <p class="text-17 font-bold">More News for you</p>
                    <div class="h-[0.1px] w-1/2 sm:w-2/3 md:w-3/4 lg:w-2/3 2xl:w-9/12 bg-amberblack absolute right-0"></div>
                </div>
                <!-- row 5 -->
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div id="post-8" class="mt-3 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
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
<script src="{{asset('./js/comment.js')}}"></script>
</body>

</html>
