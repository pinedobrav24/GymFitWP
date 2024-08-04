function gfWP() {
    if(document.querySelector('.swiper')){
        const opciones ={
            loop: true,
            autoplay: {
                delay:3000
            }
        }
        new Swiper('.swiper',opciones);
    }
}

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');

if(textWrapper){
    textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
        targets: '.ml11 .line',
        scaleY: [0,1],
        opacity: [0.5,1],
        easing: "easeOutExpo",
        duration: 700
    })
    .add({
        targets: '.ml11 .line',
        translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
        easing: "easeOutExpo",
        duration: 700,
        delay: 100
    }).add({
        targets: '.ml11 .letter',
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        offset: '-=775',
        delay: (el, i) => 34 * (i+1)
    }).add({
        targets: '.ml11',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1000
    });  
}

const hambuger=document.querySelector('.hambuger-menu svg')
hambuger.addEventListener('click',function(){
    const menuPrincipal=document.querySelector('.contenedor-menu');
    menuPrincipal.classList.toggle('mostrar');
})

document.addEventListener('DOMContentLoaded',gfWP )

window.onscroll =function(){
    const scroll =window.scrollY;

    const barraNav=document.querySelector('.barra-navegacion')

    if(scroll>300){
        barraNav.classList.add('fixed-top');
    }else{
        barraNav.classList.remove('fixed-top');
    }
}