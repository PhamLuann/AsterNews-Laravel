document.addEventListener('click', (e) => {
    if (document.getElementById('more-category').contains(e.target)) {
        document.getElementById('category-modal').classList.toggle('hidden')
    } else {
        document.getElementById('category-modal').classList.add('hidden')
    }
    if (document.getElementById('menu_btn').contains(e.target)) {
        document.getElementById('menu').classList.toggle('hidden')
        document.getElementById('menu').classList.toggle('absolute')
        document.getElementById('menu').classList.toggle('bg-white')
        document.getElementById('menu').classList.toggle('pt-4')
        document.getElementById('small-logo').classList.toggle('hidden')
        document.getElementById('large').classList.remove('pt-5')
        document.getElementById('layer').classList.add('layer')
    } else {
        // Click Outside from Toggle top menu icon
        if (document.getElementById('menu').classList.contains('absolute')) {
            document.getElementById('menu').classList.add('hidden')
            document.getElementById('menu').classList.remove('absolute')
            document.getElementById('menu').classList.remove('bg-white')
            document.getElementById('menu').classList.remove('pt-4')
            document.getElementById('small-logo').classList.remove('hidden')
            document.getElementById('large').classList.add('pt-5')
            document.getElementById('layer').classList.remove('layer')
        }
    }
})
