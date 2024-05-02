// Selection des balises du DOM
const menu = document.getElementById('menu');
const navbar = document.getElementById('nav-bar');

menu.addEventListener('click', () => {

    menu.classList.toggle('active');
    navbar.classList.toggle('active');
});