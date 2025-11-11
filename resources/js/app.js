// resources/js/app.js
import './bootstrap'; // jika ada
import AOS from 'aos';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
  AOS.init({
    duration: 800,
    once: true,
    offset: 100,
  });
});
