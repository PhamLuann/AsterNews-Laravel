@extends('layouts.master')
@section('title', 'News Feed')
@section('content')
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
    <div id="comment" class="hidden animate-view">
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
