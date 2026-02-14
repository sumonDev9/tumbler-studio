// ভ্যারিয়েবল সিলেকশন
const navbar = document.getElementById('main-nav');
const menuToggle = document.getElementById('menu-toggle');
const mobileDrawer = document.getElementById('mobile-drawer');
const closeDrawer = document.getElementById('close-drawer');
// এই লাইনটি আপনার কোডে মিসিং ছিল
const drawerContent = document.getElementById('drawer-content');

// Scroll Effect
window.onscroll = function () {
    if (window.scrollY > 50) {
        navbar.classList.add('backdrop-blur-md', 'bg-black/20', 'py-2');
    } else {
        navbar.classList.remove('backdrop-blur-md', 'bg-black/20', 'py-2');
    }
};

// Drawer খুলতে
menuToggle.addEventListener('click', () => {
    mobileDrawer.classList.remove('opacity-0', 'pointer-events-none');
    drawerContent.classList.remove('translate-x-full');
    document.body.style.overflow = 'hidden';
});

// Drawer বন্ধ করতে
const hideDrawer = () => {
    mobileDrawer.classList.add('opacity-0', 'pointer-events-none');
    drawerContent.classList.add('translate-x-full');
    document.body.style.overflow = 'auto';
};

closeDrawer.addEventListener('click', hideDrawer);

// বাইরে ক্লিক করলে বন্ধ হবে
mobileDrawer.addEventListener('click', (e) => {
    if (e.target === mobileDrawer) hideDrawer();
});

// login password 

function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    }
}

// about vision
document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".gallerySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: ".next-btn",
            prevEl: ".prev-btn",
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
});
