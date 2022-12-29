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
