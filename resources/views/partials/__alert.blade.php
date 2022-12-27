@if(session('msg'))
    <div id="alert" class="w-60 h-20 bg-green-400 rounded-xl fixed z-10 flex items-center justify-center">
        {{session('msg')}}
    </div>
    <script>
        setTimeout(function (){
            document.getElementById('alert').classList.add('hidden');
        }, 1000);
    </script>
@endif
