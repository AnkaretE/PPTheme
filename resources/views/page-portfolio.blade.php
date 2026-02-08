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
    content: "<h2>Content Creation</h2><p>Some text about content creation…</p>",
    education: "<h2>Education</h2><p>Some text about education…</p>",
    modelling: "<h2>Modelling</h2><p>Description here…</p>",
    consultancy: "<h2>Consultancy</h2><p>Description here…</p>"
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

@endsection
