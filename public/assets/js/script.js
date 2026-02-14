//navbar
const navbar = document.getElementById('main-nav');
const menuToggle = document.getElementById('menu-toggle');
const mobileDrawer = document.getElementById('mobile-drawer');
const closeDrawer = document.getElementById('close-drawer');

// Scroll Effect: Fixed + Blur
window.onscroll = function () {
    if (window.scrollY > 50) {
        navbar.classList.add('backdrop-blur-md', 'bg-black/20', 'py-2');
    } else {
        navbar.classList.remove('backdrop-blur-md', 'bg-black/20', 'py-2');
    }
};

// Mobile Menu Toggle
menuToggle.onclick = () => mobileDrawer.classList.remove('translate-x-full');
closeDrawer.onclick = () => mobileDrawer.classList.add('translate-x-full');

