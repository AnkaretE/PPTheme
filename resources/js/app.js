import '../css/app.css'
console.log('GSAP app.js loaded');

import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';



gsap.registerPlugin(ScrollTrigger);

const rolePlaceholder = document.querySelector('.role-placeholder');
const roleTriggers = document.querySelectorAll('.role-trigger');

if (!rolePlaceholder || !roleTriggers.length) {
  console.warn('Roles not found');
}

roleTriggers.forEach((trigger) => {
  ScrollTrigger.create({
    trigger,
    start: 'top center',
    onEnter: () => {
      rolePlaceholder.textContent = trigger.dataset.role;
        gsap.fromTo(
          rolePlaceholder,
          { opacity: 0, y: 8 },
          { opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' }
      );


    },
    onEnterBack: () => {
      rolePlaceholder.textContent = trigger.dataset.role;
    },
  });
});

const toggle = document.getElementById('menu-toggle');
const menu = document.getElementById('menu');

if (toggle && menu) {
  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
}

