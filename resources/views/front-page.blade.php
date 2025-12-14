@extends('layouts.app')

@section('content')
<section class="roles-wrapper">
  <div class="roles-heading">
    <h1>
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
