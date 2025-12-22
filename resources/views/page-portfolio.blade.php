@extends('layouts.app')

@section('content')
<div class="portfolio-layout">

  <!-- LEFT: image -->
<div class="portfolio-image">
  <div class="slideshow">
    <img src="/wp-content/themes/PPTheme/public/images/test1.jpg" class="slide is-active" alt="">
    <img src="/wp-content/themes/PPTheme/public/images/test2.jpg" class="slide" alt="">
    <img src="/wp-content/themes/PPTheme/public/images/model.png" class="slide" alt="">

    <script>
  document.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelectorAll('.slide');
    if (!slides.length) return;

    var current = 0;

    setInterval(function () {
      slides[current].classList.remove('is-active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('is-active');
    }, 3500);
  });
</script>

  </div>
</div>



  <!-- CENTER: buttons -->
  <div class="portfolio-buttons">
    <button class="portfolio-btn is-active" data-target="content">Content Creation</button>
    <button class="portfolio-btn" data-target="education">Education</button>
    <button class="portfolio-btn" data-target="modelling">Modelling</button>
    <button class="portfolio-btn" data-target="consultancy">Consultancy</button>
    <button class="wwm-btn" data-target="consultancy">Work with me</button>
  </div>

  <!-- RIGHT: text -->
  <div class="portfolio-text">
    <!-- text comes from active panel -->
  </div>

</div>



@endsection
