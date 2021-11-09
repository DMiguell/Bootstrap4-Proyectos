
// Smoot Scroll con JS Nativo

// document.querySelectorAll('.navbar .nav-link').forEach(enlace=>{
//     enlace.addEventListener('click', (e)=>{
//         e.preventDefault();
//         const probando = enlace.getAttribute('href');
//         document.querySelector(probando).scrollIntoView({
//             behavior:"smooth"
//         });
//     })
// });

//Cambia de color el fondo al hacer scroll

window.onscroll = function(e){
    const scroll = window.scrollY;

    const header = document.querySelector('#navegacion-principal')

    if(scroll > 300){
        header.classList.remove('bg-dark')
        header.classList.add('bg-success')
        header.classList.remove('navbar-dark')
        header.classList.add('navbar-light')
    }
    else{
        
        header.classList.remove('bg-success')
        header.classList.add('bg-dark')
        header.classList.remove('navbar-light')
        header.classList.add('navbar-dark')
    }
}

$(document).ready(function(){
    $('#fecha').countdown('2022/08/23',function(evento){
        $(this).html( evento.strftime('<span> %D </span> Dias  <span> %H </span> Horas <span> %M </span> Minutos <span> %S </span> Segundos') );
    })
});