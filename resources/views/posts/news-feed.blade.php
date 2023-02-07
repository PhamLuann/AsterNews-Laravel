@extends('layouts.master')
@section('title', 'Reading')
@section('content')
    @include('partials.category')
    <div class="mt-6">
        <div class="w-full h-fit py-4">
            <p class="text-[26px] font-bold leading-[34px]">{{$post->title}}</p>
            <div class="mt-3.5 flex text-skyblue text-xs">
                <a href="#" class="bg-sky-100 rounded py-1 px-3 mr-2.5 hover:bg-sky-200">{{$post->category}}</a>
            </div>
            <p class="mt-5 text-lg leading-loose">{{$post->description}}</p>
            @if($post->hero != null)
                <img src="{{asset($post->hero)}}" class="mt-9 w-fit rounded">
            @endif
            <div class="text-17 mt-10 leading-loose">
                {!!$post->body!!}
            </div>
            <div class="mt-9 flex justify-center text-xs opacity-50">
                <p>Published {{$post->created_at}}</p>
            </div>
            <div class="mt-2 flex justify-center text-xs">
                <p>by {{$post->author}}</p>
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
            <img src="{{asset('img/post/mail.png')}}" class="hidden lg:block w-[170px] h-28 absolute right-6">
        </div>
    </div>
    <!-- end subcribe -->
    {{--More--}}
    @if(count($more) > 0)
        <div class="flex items-center relative mt-14">
            <p class="text-17 font-bold">More News for you</p>
            <div class="h-[0.1px] w-1/2 sm:w-2/3 md:w-3/4 lg:w-2/3 2xl:w-9/12 bg-amberblack absolute right-0"></div>
        </div>
        <div class="md:grid md:grid-cols-2 gap-5">
            @foreach($more as $more_post)
                <div class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                    @if($more_post->hero!=null)
                        <a href="{{route('showPost', [$more_post->slug])}}"
                           class="flex grid grid-cols-10 gap-2 hover:text-blue-900">
                            <div class="col-span-6 sm:col-span-8 md:col-span-6">
                                <p class="font-medium text-lg flex">{{$more_post->title}}</p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">{{$more_post->description}}</p>
                            </div>
                            <div class="col-span-4 sm:col-span-2 md:col-span-4">
                                <img src="{{asset($more_post->hero)}}"
                                     class="ml-4 w-full h-full hover:cursor-pointer">
                            </div>
                        </a>
                    @else
                        <a href="{{route('showPost', [$more_post->slug])}}" class="flex hover:text-blue-900">
                            <div>
                                <p class="font-medium text-lg flex">{{$more_post->title}}</p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">{{$more_post->description}}</p>
                            </div>
                        </a>
                    @endif
                    <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                        <div class="flex items-center text-xs opacity-40">
                            <p class="mr-2.5">{{$more_post->author}}</p>
                            <img src="./img/icon/choose-icon.png" class="w-0.5 h-0.5 mr-2.5">
                            <p>{{$more_post->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                            <img src="./img/icon/share.png" class="w-4 h-4 mr-2.5">
                            <p class="hidden xl:block">Share</p>
                            <img src="./img/icon/pocket.png" class="w-4 h-4 ml-7 mr-2.5">
                            <p class="hidden xl:block">Read Later</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <!-- end more -->

@stop
