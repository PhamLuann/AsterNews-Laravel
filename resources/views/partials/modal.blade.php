<div id="category-modal" class="hidden bg-menu w-screen h-screen fixed top-0 left-0 z-20 flex justify-center">
    <div class="animate-view w-[97%] lg:w-3/5 h-80 rounded-2xl bg-white absolute top-24 lg:mr-3 drop-shadow-2xl overflow-y-auto">
        <img src="{{asset('./img/icon/exit.png')}}" alt="exit" class="w-5 h-5 absolute top-2 right-2 hover:opacity-80">
        <div class="flex justify-center mt-12 mb-[4%] px-[6%]">
            <div
                class="grid grid-cols-2 xs:grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-8">
                <a class="w-32 h-8 select-top-items rounded-[20px] flex items-center justify-center" href="">All</a>
                @forelse($categories as $category)
                    <a class="w-32 h-8 bg-graye5 rounded-[20px] flex items-center justify-center"
                       href="{{route('getByCategory', [$category->slug])}}">{{$category->name}}</a>
                @empty
                    No category more
                @endforelse
        </div>
    </div>
</div>
</div>
