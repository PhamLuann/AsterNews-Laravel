<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('./js/top-items.js')}}"></script>
<script>
    const profile = document.getElementById('profile')
    const view_profile = document.getElementById('view-profile')
    document.addEventListener('click', (e)=>{
        if(view_profile.contains(e.target)){
            profile.classList.toggle('hidden')
        }else{
            profile.classList.add('hidden')
        }
    })
</script>
