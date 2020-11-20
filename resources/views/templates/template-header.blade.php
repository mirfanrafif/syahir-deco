@extends('templates.welcome-template')

@section('content')
<div id="banner-area">
  <img src="{{ asset('images/banner/banner1.jpg') }}" alt="" />
  <div class="parallax-overlay"></div>
  <!-- Subpage title start -->
  <div class="banner-title-content">
    <div class="text-center">
      <h2>@yield('title')</h2>
    </div>
  </div><!-- Subpage title end -->
</div><!-- Banner area end -->

@yield('main-content')
@endsection