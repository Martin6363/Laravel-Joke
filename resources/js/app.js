import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const aside = document.getElementById('aside');
let asideParent = aside.parentElement;
let asideOffsetTop = aside.offsetTop;
let parentOffsetLeft = asideParent.offsetLeft;

window.addEventListener('scroll', function() {
    if (window.scrollY >= asideOffsetTop) {
        aside.classList.add('aside-fixed');
        aside.style.left = (parentOffsetLeft) + 'px';
    } else {
        aside.classList.remove('aside-fixed');
        aside.style.left = 'auto';
    }
});