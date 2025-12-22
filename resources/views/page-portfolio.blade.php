@extends('layouts.app')

@section('content')
<div class="portfolio-layout">

  <!-- LEFT: image -->
  <div class="portfolio-image">
    <!-- image comes from active panel -->
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
