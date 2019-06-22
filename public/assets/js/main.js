$(document).ready(function() {
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.modal').modal();
});
const navItem = document.querySelector('nav');
document.querySelector('#mobile-menu').onclick = () => {
    if (navItem.classList.contains('hideMenu') === true) {
        navItem.classList.remove("hideMenu");
    } else {
        navItem.classList.add("hideMenu");
    }
}