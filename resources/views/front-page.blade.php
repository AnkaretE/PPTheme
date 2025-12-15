@extends('layouts.app')

@section('content')
<section class="roles-wrapper">
  <div class= "roles-heading bg-white p-10 rounded-3xl">
    <h1 class = "text-3xl md:text-4xl font-light leading-tight">
      Hello, my name is Pixie and I am a
      <span class="role-placeholder">content creator</span>
    </h1>
  </div>

  <div class="role-triggers">
    <div class="role-trigger" data-role="content creator"></div>
    <div class="role-trigger" data-role="educator"></div>
    <div class="role-trigger" data-role="model"></div>
    <div class="role-trigger" data-role="writer"></div>
  </div>
</section>

@endsection
