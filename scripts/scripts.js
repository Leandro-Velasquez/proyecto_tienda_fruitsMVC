const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.menu');
btnMenu.addEventListener('click', () => {
    menu.classList.toggle('mostrar-menu');
})

const nav = document.querySelector('.nav');
window.addEventListener('scroll', () => {
    nav.classList.toggle('abajo', window.scrollY > 0);
})