const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.menu');
btnMenu.addEventListener('click', () => {
    menu.classList.toggle('mostrar-menu');
})

const nav = document.querySelector('.nav');
window.addEventListener('scroll', () => {
    nav.classList.toggle('abajo', window.scrollY > 0);
})

const testimonios = document.querySelectorAll('.section-testimonials__li');
const buttonTestimonials1 = document.getElementById('testimonials-button1');
const buttonTestimonials2 = document.getElementById('testimonials-button2');
const buttonTestimonials3 = document.getElementById('testimonials-button3');
const buttonsTestimonials = document.querySelector('.section-testimonials__menu-buttons');
buttonsTestimonials.addEventListener('click', (e) => {
    if(e.target.id == buttonTestimonials1.id){
        testimonios[0].classList.add('mostrar-testimonio');
        testimonios[1].classList.remove('mostrar-testimonio');
        testimonios[2].classList.remove('mostrar-testimonio');
    }
    else if(e.target.id == buttonTestimonials2.id){
        testimonios[0].classList.remove('mostrar-testimonio');
        testimonios[1].classList.add('mostrar-testimonio');
        testimonios[2].classList.remove('mostrar-testimonio');
    }
    else if(e.target.id == buttonTestimonials3.id){
        testimonios[0].classList.remove('mostrar-testimonio');
        testimonios[1].classList.remove('mostrar-testimonio');
        testimonios[2].classList.add('mostrar-testimonio');
    }
})