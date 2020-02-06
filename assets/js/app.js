/* Menu - Hamburger */
const menuBtn    	=  document.querySelector('.menu-btn');
const hamburger 	=  document.querySelector('.menu-btn__burger');
const nav           = document.querySelector('.nav');

const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-item');

const bodyClass = document.querySelector('body');

//initiate menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){

        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));
        bodyClass.classList.add('disable__scroll');

        showMenu = true;

    } else {
        hamburger.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        bodyClass.classList.remove('disable__scroll');

        showMenu = false;

    }
}


/* Close menu by clicking on a menu item */
function myFunction() {
    $('.nav').removeClass('open');
    $('body').removeClass('disable__scroll');
    $('.menu-nav').removeClass('open');
    $('.menu-btn__burger').removeClass('open');

    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    },900);
    return false;
}


/* Smooth scroll */
document.addEventListener("DOMContentLoaded", function() {
    ScrollOut({  
    	once: false
    });
});