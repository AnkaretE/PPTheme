@extends('layouts.app')

@section('content')


<div class="portfolio-layout">

    <!-- LEFT -->
    <div class="portfolio-image">
        <div id="slideshow-container"></div>
    </div>

    <!-- CENTER -->
    <div class="portfolio-buttons">
        <button class="portfolio-btn is-active" data-target="content">Content Creation</button>
        <button class="portfolio-btn" data-target="education">Education</button>
        <button class="portfolio-btn" data-target="modelling">Modelling</button>
        <button class="portfolio-btn" data-target="consultancy">Consultancy</button>

        <!-- CLICKABLE TEXT -->
    <a href="/contact" class="wwm-btn">Work With Me</a>
    </div>

    <!-- RIGHT -->
    <div class="portfolio-text">
        <div id="text-container"></div>
    </div>

</div>


<!-- ⭐ Bottom border PNG -->
<div class="portfolio-bottom-border"></div>

<script>
/* ---------------------
   DEFINE YOUR CONTENT
----------------------*/

const slideshows = {
    content: [
        "/wp-content/themes/PPTheme/public/images/ssI1.jpg",
        "/wp-content/themes/PPTheme/public/images/ssI2.jpg"
    ],
    education: [
        "/wp-content/themes/PPTheme/public/images/ssE1.jpg",
        "/wp-content/themes/PPTheme/public/images/ssE2.jpg"
    ],
    modelling: [
      "/wp-content/themes/PPTheme/public/images/ssM1.jpg",
      "/wp-content/themes/PPTheme/public/images/ssM2.jpg"
    ],
    consultancy: [
       "/wp-content/themes/PPTheme/public/images/ssC1.jpg",
       "/wp-content/themes/PPTheme/public/images/ssC2.jpg"
    ]
};


const textPanels = {
    content: `
        <ul>
            <li>Designed social media campaigns lalala anything can go here, lorem impsum. </li>
            <li>Created content for multiple platforms, I like rainbows, lalala</li>
            <li>Managed editorial calendar, testing this out.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</li>
            
        </ul>
    `,
    education: `
        <ul>
            <li>Graduated from XYZ University</li>
            <li>Mastered Digital Marketing</li>
            <li>Conducted workshops on Content Creation</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</li>
        </ul>
    `,
    modelling: `
        <ul>
            <li>Worked with ABC Agency</li>
            <li>Featured in Magazine XYZ</li>
            <li>Participated in Fashion Week 2023</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</li>
        </ul>
    `,
    consultancy: `
        <ul>
            <li>Advised multiple startups</li>
            <li>Specialized in Social Media Strategy</li>
            <li>Helped brands grow their online presence</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</li>
        </ul>
    `
};



/* ---------------------
   BUTTON CLICK LOGIC
----------------------*/

document.querySelectorAll('.portfolio-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const id = this.dataset.target;

        // update slideshow
        const container = document.getElementById("slideshow-container");
        container.innerHTML = slideshows[id]
            .map((src, index) => `<img src="${src}" class="slide${index === 0 ? ' is-active' : ''}">`)
            .join("");

        // update text
        document.getElementById("text-container").innerHTML = textPanels[id];

        // Update button styles
        document.querySelectorAll('.portfolio-btn').forEach(b => b.classList.remove('is-active'));
        this.classList.add('is-active');
    });
});

// Load default section (Content Creation)
document.querySelector('.portfolio-btn.is-active').click();

</script>

<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.11/dist/dotlottie-wc.js"
  type="module"
></script>

<div id="lottie-container">
  <dotlottie-wc
  autoplay="false"
    id="geese-animation"
    src="https://lottie.host/2f9694f3-bc13-44df-894b-b322a3765cb4/7nySoubvrx.lottie"

    style="
      position: absolute;
      top: 175px;
      width: 100%;
      height: 100%;
      opacity: 0.8;
      pointer-events: none;
      z-index: -1;
      object-fit: cover;
      transform: scale(1.2);
      z-index: -2
    "
  ></dotlottie-wc>
</div>

<script>
const dotLottieElement = document.getElementById('geese-animation');

document.addEventListener("DOMContentLoaded", () => {
  const anim = dotLottieElement.dotLottie;

  // Attach click listeners AFTER animation is ready
  document.querySelectorAll('.portfolio-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      anim.loop = false;   // optional — remove if you want looping
      anim.play();         // start animation on every click
    });
  });
});
</script>



@endsection

