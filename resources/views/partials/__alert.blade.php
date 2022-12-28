@if(session('msg'))
    <div id="alert" class="px-5 w-fit h-20 bg-green-400 rounded-xl fixed z-10 flex items-center justify-center">
        {{session('msg')}}
    </div>
    <script>
        setTimeout(function (){
            document.getElementById('alert').classList.add('hidden');
        }, 1000);
    </script>
@endif

@if(session('err'))
    <div id="alert" class="px-5 w-fit h-20 bg-red-600 rounded-xl fixed z-10 flex items-center justify-center">
        {{session('err')}}
    </div>
    <script>
        setTimeout(function (){
            document.getElementById('alert').classList.add('hidden');
        }, 1000);
    </script>
@endif
