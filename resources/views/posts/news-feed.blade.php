@extends('layouts.master')
@section('title', 'News Feed')
@section('content')
    @include('partials.category')
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
    @comments(['model' => $post])
    <!-- subcribe -->
    <div
        class="w-full mt-12 p-8 bg-[#FFE8C5] rounded relative flex justify-center text-center lg:justify-start lg:text-start">
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
@stop
