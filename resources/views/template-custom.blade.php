{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')

<div class="hero">
  <h1>
    Hi, my name is <span class="name">XXX</span><br>
    and I am a <span class="role-placeholder"></span>
  </h1>
</div>

<div class="roles">
  @foreach ($roles as $role)
    <section class="role-section" data-role="{{ $role['title'] }}">
      <div class="role-image">
        <img src="{{ $role['image'] }}" alt="{{ $role['title'] }}">
      </div>

      <h2>{{ $role['title'] }}</h2>
    </section>
  @endforeach
</div>

@endsection