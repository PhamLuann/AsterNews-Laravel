const view_comment = document.getElementById('view-comment')
const hide_comment = document.getElementById('hide-comment')
const comment = document.getElementById('comment')
document.addEventListener('click', (e) => {
    if(view_comment.contains(e.target)){
        view_comment.classList.add('hidden')
        comment.classList.remove('hidden')
    }
    if(hide_comment.contains(e.target)){
        comment.classList.add('hidden')
        view_comment.classList.remove('hidden')
    }
})
