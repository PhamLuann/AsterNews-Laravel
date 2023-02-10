<div id="top-items">
    <p class="font-bold text-xl mt-9">Top Stories for you</p>
    <div class="relative">
        <ul id="tag-items" class="slick text-center mt-5 flex justify-between items-center mr-14">
            <li id="all" class="item select-top-items h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5"><a href="{{route('allPost')}}">All</a></li>
            @php $count = 0; @endphp
            @forelse($categories as $category)
                <li id="{{$category->slug}}" class="item bg-white h-fit w-fit py-1.5 px-4 rounded-3xl mr-2.5"><a href="{{route('getByCategory', [$category->slug])}}">{{$category->name}}</a></li>
                @php $count++; if ($count == 8) break; @endphp
            @empty
                <span>No category here</span>
            @endforelse
        </ul>
        <p id="more-category"
           class="rounded-3xl hover:cursor-pointer text-3xl absolute right-0 top-[-8px]">...</p>
    </div>
</div>
