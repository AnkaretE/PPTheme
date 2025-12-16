@extends('layouts.app')

@section('content')
<section class="roles-wrapper">
  <div class= "roles-heading p-10 rounded-3xl">
    <h1 class = "text-3xl md:text-4xl font-light leading-tight">
      Hello, my name is Pixie and I am <br>
      <span class="role-placeholder"></span>
    </h1>
  </div>

  <div class="role-visuals">
  <div class="role-visual" data-role="a content creator">
   <img src="/wp-content/themes/PPTheme/public\images\ContentCreator1.jpg" class="visual top-left" />
  </div>

  <div class="role-visual" data-role="an educator">
    <img src="/wp-content/themes/PPTheme/public\images\Educator1.jpg" class="visual top-right" />
  </div>
</div>

  <div class="role-triggers">
    <div class="role-trigger" data-role="a content creator"></div>
    <div class="role-trigger" data-role="an educator"></div>
    <div class="role-trigger" data-role="a model"></div>
    <div class="role-trigger" data-role="a writer"></div>
    <div class="role-trigger" data-role="a digital accessibility consultant"></div>
  </div>
</section>

@endsection
