let btnPrimary = document.querySelector('.nav__text');

btnPrimary.addEventListener('mouseover', function() {
    let mostrar = document.querySelector('.nav__text__mas');
    mostrar.classList.add('nav__text__mas--active');
})

btnPrimary.addEventListener('mouseout', function() {
    let mostrar = document.querySelector('.nav__text__mas');
    mostrar.classList.remove('nav__text__mas--active');
})

let barco = document.querySelector('.barco__img');
let textoBarco = document.querySelector('.barco__texto');

//desplazar barco con scroll
window.addEventListener('scroll', function() {
    let scroll = window.pageYOffset;
    barco.style.left = 'calc(100% - ' + scroll * 0.07 + '%)';
    textoBarco.style.left = 'calc(100% - ' + scroll * 0.07 + '% + 100px)';
})


let btnSubir = document.querySelector('.bi-chevron-double-up');
let btnBajar = document.querySelector('.bi-chevron-double-down');
btnSubir.addEventListener('click', ()=>{
    document.querySelector('.section').classList.add('section--active');
})


btnBajar.addEventListener('click', ()=>{
    document.querySelector('.section').classList.remove('section--active');
})