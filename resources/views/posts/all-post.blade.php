@extends('layouts.master')
@section('title', 'Aster news')
@section('content')
    @include('partials.category')
    <div id="post" class="">
        <div class="md:grid md:grid-cols-2 gap-5">
            @forelse($posts as $post)
                <div class="mt-5 w-full h-auto bg-white pt-4 pb-11 px-7 relative">
                    @if($post->hero!=null)
                        <a href="{{route('showPost', [$post->slug])}}"
                           class="flex grid grid-cols-10 gap-2 hover:text-blue-900">
                            <div class="col-span-6 sm:col-span-8 md:col-span-6">
                                <p class="font-medium text-lg flex">{{$post->title}}</p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">{{$post->description}}</p>
                            </div>
                            <div class="col-span-4 sm:col-span-2 md:col-span-4">
                                <img src="{{asset($post->hero)}}"
                                     class="ml-4 w-full h-full hover:cursor-pointer">
                            </div>
                        </a>
                    @else
                        <a href="{{route('showPost', [$post->slug])}}" class="flex hover:text-blue-900">
                            <div>
                                <p class="font-medium text-lg flex">{{$post->title}}</p>
                                <p class="mt-2.5 text-sm leading-6 opacity-60">{{$post->description}}</p>
                            </div>
                        </a>
                    @endif
                    <div class="flex mt-4 w-11/12 absolute bottom-4 left-7">
                        <div class="flex items-center text-xs opacity-40">
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <div class="flex items-center text-primary text-xs absolute right-0 hover:cursor-pointer">
                            <img src="{{asset('/img/icon/share.png')}}" class="w-4 h-4 mr-2.5">
                            <p class="hidden xl:block">Share</p>
                            <img src="{{asset('img/icon/pocket.png')}}" class="w-4 h-4 ml-7 mr-2.5">
                            <p class="hidden xl:block">Read Later</p>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No post here</h1>
            @endforelse
        </div>
    </div>
    <!-- end post -->
    <div class="flex w-full justify-center mt-5">
        <div>{{$posts->links()}}</div>
    </div>
@stop
