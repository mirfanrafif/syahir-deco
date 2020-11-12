@extends('templates.template-header')

@section('title', 'Daftar Barang')

@section('main-content')
<section id="main-container">
  <div class="container">

    <!-- Pricing table start -->
    <div class="row">
      <div class="col-md-12 heading">
        <span class="title-icon classic float-left"><i class="fa fa-university"></i></span>
        <h2 class="title classic">List Barang</h2>
      </div>
    </div><!-- Title row end -->

    <div class="row">
      <!-- plan start -->
      @for ($i = 0; $i < 10; $i++) <div class="col-lg-3 col-md-4 col-sm-6">
        <div class=" card" style="margin-bottom: 30px;">
          <img src="images/slider/bg1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
    </div><!-- plan end -->
    @endfor
  </div>
  <!--/ Content row end -->
  <!--/ Content row end -->
  </div><!-- container end -->
</section>
@endsection