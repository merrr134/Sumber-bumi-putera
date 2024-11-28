import './bootstrap';
import 'flowbite';

import AOS from 'aos';
import 'aos/dist/aos.css';import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

gsap.from(".fade-in", {
    scrollTrigger: {
        trigger: ".fade-in",
        start: "top 80%",
        toggleActions: "play none none none", // Hanya bermain sekali
    },
    opacity: 0,
    y: 50,
    duration: 1.2,
});


// Inisialisasi AOS
AOS.init({
    offset: 120, // Jarak dari viewport untuk memulai animasi
    delay: 100, // Penundaan animasi
    duration: 1000, // Durasi animasi
    easing: 'ease-in-out', // Jenis easing animasi
    once: true, // Animasi hanya dijalankan sekali
});

document.addEventListener('DOMContentLoaded', function() {
    gsap.from('.animate', { opacity: 0, y: 50, duration: 1, delay: 0.3 });
  });
