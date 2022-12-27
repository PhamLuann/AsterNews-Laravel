<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('./js/top-items.js')}}"></script>
<script src="{{asset('./js/comment.js')}}"></script>
<script>
    const menu = document.getElementById('menu')
    const menu_btn = document.getElementById('menu_btn')
    const small_logo = document.getElementById('small-logo')
    const large_logo = document.getElementById('large')
    const layer = document.getElementById('layer')

    const profile = document.getElementById('profile')
    const view_profile = document.getElementById('view-profile')
    document.addEventListener('click', (e)=>{
        if(view_profile.contains(e.target)){
            profile.classList.toggle('hidden')
        }else{
            profile.classList.add('hidden')
        }
        if(document.getElementById('more-category').contains(e.target)){
            document.getElementById('category-modal').classList.toggle('hidden')
        }else{
            if (document.getElementById('category-modal').classList.contains('bg-menu')){
                document.getElementById('category-modal').classList.add('hidden')
            }
        }
        if (menu_btn.contains(e.target)) {
            menu.classList.toggle('hidden')
            menu.classList.toggle('absolute')
            menu.classList.toggle('bg-white')
            menu.classList.toggle('pt-4')
            small_logo.classList.toggle('hidden')
            large_logo.classList.remove('pt-5')
            layer.classList.add('layer')
        } else {
            // Click Outside from Toggle top menu icon
            if (menu.classList.contains('absolute')) {
                menu.classList.add('hidden')
                menu.classList.remove('absolute')
                menu.classList.remove('bg-white')
                menu.classList.remove('pt-4')
                small_logo.classList.remove('hidden')
                large_logo.classList.add('pt-5')
                layer.classList.remove('layer')
            }
        }
    })
</script>
