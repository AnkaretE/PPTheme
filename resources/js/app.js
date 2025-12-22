import '../css/app.css'
console.log('GSAP app.js loaded');

import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';



gsap.registerPlugin(ScrollTrigger);

const rolePlaceholder = document.querySelector('.role-placeholder');
const roleTriggers = document.querySelectorAll('.role-trigger');
const visualGroups = document.querySelectorAll('.role-visual');


const showVisualsForRole = (role) => {
  visualGroups.forEach((group) => {
    const matches = group.dataset.role === role;

    gsap.to(group, {
      opacity: matches ? 1 : 0,
      duration: 0.6,
      ease: 'power2.out',
    });

    const visuals = group.querySelectorAll('.visual');

    if (matches) {
      gsap.fromTo(
        visuals,
        { opacity: 0, y: 20 },
        {
          opacity: 1,
          y: 0,
          duration: 0.6,
          stagger: 0.1,
          ease: 'power2.out',
        }
      );
    }
  });
};
if (!rolePlaceholder || !roleTriggers.length) {
  console.warn('Roles not found');
}

roleTriggers.forEach((trigger) => {
  ScrollTrigger.create({
    trigger,
    start: 'top center',
    onEnter: () => {
      rolePlaceholder.textContent = trigger.dataset.role;
      showVisualsForRole(trigger.dataset.role);
        gsap.fromTo(
          rolePlaceholder,
          { opacity: 0, y: 8 },
          { opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' }
      );


    },
    onEnterBack: () => {
      rolePlaceholder.textContent = trigger.dataset.role;
      showVisualsForRole(trigger.dataset.role);
    },
  });
});

const buttons = document.querySelectorAll('.portfolio-btn');
const panels = document.querySelectorAll('.portfolio-panel');

buttons.forEach((btn) => {
  btn.addEventListener('click', () => {
    const target = btn.dataset.target;

    // buttons
    buttons.forEach(b => b.classList.remove('is-active'));
    btn.classList.add('is-active');

    // panels
    panels.forEach(panel => {
      panel.classList.toggle(
        'is-active',
        panel.dataset.panel === target
      );
    });
  });
});








