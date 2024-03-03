const header = document.querySelector('header');
function Navbar(){
    header.classList.toggle('scrolled', window.scrollY > 0)
}
Navbar();
window.addEventListener('scroll',Navbar);

let menu = document.querySelector('#menu-btn');
let userbtn = document.querySelector('#user-btn');

userbtn.addEventListener('click', function(){
    let userBox = document.querySelector('.user-box');
    userBox.classList.toggle('active');
})