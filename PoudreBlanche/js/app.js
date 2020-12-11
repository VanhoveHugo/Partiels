document.onreadystatechange = () => {
    if(document.readyState == "complete") {
        window.scroll(0,0)
    }
}

let nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
    if(window.scrollY <= 100) {
        nav.classList.remove('active');
    } else {
        nav.classList.add('active');
    }
})

