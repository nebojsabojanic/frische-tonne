/* Menu - Hamburger */
const hamburgerBtn  = document.querySelector('.header__hamburger');
const menuBtn    	= document.querySelector('.menu-btn');
const hamburger 	= document.querySelector('.menu-btn__burger');
const nav           = document.querySelector('.nav');

const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-item');

const bodyClass = document.querySelector('body');

let overlay   = document.querySelector(".menu__overlay");

//initiate menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){

        hamburgerBtn.classList.add('open');
        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));
        overlay.classList.add('open');

        bodyClass.classList.add('disable__scroll');
        bodyClass.classList.add('oh');

        showMenu = true;

    } else {
        hamburgerBtn.classList.remove('open');
        hamburger.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        overlay.classList.remove('open');

        bodyClass.classList.remove('disable__scroll');
        bodyClass.classList.remove('oh');

        showMenu = false;

    }
}


/* Close menu by clicking on a menu item */
function closeMenu() {
    $('.nav').removeClass('open');
    $('body').removeClass('disable__scroll');
    $('.menu-nav').removeClass('open');
    $('.menu-btn__burger').removeClass('open');
    overlay.classList.remove('open');
    bodyClass.classList.remove('oh');


    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    },900);
    return false;
}

/* Close menu by clicking anywhere on overlay */
function closeOverlay() {
    hamburgerBtn.classList.remove('open');
    hamburger.classList.remove('open');
    navItems.forEach(item => item.classList.remove('open'));
    nav.classList.remove('open');
    menuNav.classList.remove('open');
    overlay.classList.remove('open');

    bodyClass.classList.remove('disable__scroll');
    bodyClass.classList.remove('oh');

    showMenu = false;
}

overlay.addEventListener("click", closeOverlay);

document.onkeydown = function(evt) {
    evt = evt || window.event;
    if (evt.keyCode === 27) {
        hamburgerBtn.classList.remove('open');
        hamburger.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        overlay.classList.remove('open');

        bodyClass.classList.remove('disable__scroll');
        bodyClass.classList.remove('oh');

        showMenu = false;
    }
};





/* Smooth scroll */
document.addEventListener("DOMContentLoaded", function() {
    ScrollOut({  
    	once: false
    });
});