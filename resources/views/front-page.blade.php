@extends('layouts.app')

@section('content')
<div class="roles-heading p-10 rounded-3xl">
  <h1 class="text-3xl md:text-4xl font-light leading-tight text-center">
    Hello, my name is Pixie and I am <br>
    <span class="role-placeholder"></span>
  </h1>

  <div class="role-visuals">
    <div class="role-visual" data-role="a content creator">
      <img
        src="/wp-content/themes/PPTheme/public/images/contentCreator.png"
        class="visual"
        alt="Content creation visuals"
      />
    </div>

    <div class="role-visual" data-role="an educator">
      <img
        src="/wp-content/themes/PPTheme/public/images/educator.png"
        class="visual"
        alt="Educator visuals"
      />
    </div>

    <div class="role-visual" data-role="a model">
      <img
        src="/wp-content/themes/PPTheme/public/images/model.png"
        class="visual"
        alt="Model visuals"
      />
    </div>

    <div class="role-visual" data-role="a digital accessibility consultant">
      <img
        src="/wp-content/themes/PPTheme/public/images/consultant.png"
        class="visual"
        alt="Digital accessibility consultant visuals"
      />
    </div>

  </div>
</div>

  <div class="role-triggers">
    <div class="role-trigger" data-role="a content creator"></div>
    <div class="role-trigger" data-role="an educator"></div>
    <div class="role-trigger" data-role="a model"></div>
    <div class="role-trigger" data-role="a digital accessibility consultant"></div>
  </div>
</section>

@endsection
