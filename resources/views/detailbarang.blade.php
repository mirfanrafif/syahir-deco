@extends('templates.template-header')

@section('title', 'Detail Barang')

@section('main-content')

<section id="portfolio-item">
  <div class="container">
    <!-- Portfolio item row start -->
    <div class="row">
      <!-- Portfolio item slider start -->
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="portfolio-slider">
          <div class="flexportfolio flexslider">
            <ul class="slides">
              <li><img src="images/portfolio/portfolio-bg1.jpg" alt=""></li>
              <li><img src="images/portfolio/portfolio-bg2.jpg" alt="" /></li>
              <li><img src="images/portfolio/portfolio-bg3.jpg" alt="" /></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Portfolio item slider end -->

      <!-- sidebar start -->
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="sidebar">
          <div class="portfolio-desc">
            <h3 class="widget-title">About Project</h3>
            <p>Oat cake oat cake dessert brownie. Gummies tiramisu tart jujubes jelly beans macaroon danish pie muffin.
              Soufflé pudding brownie pudding fruitcake marshmallow.
            </p>
            <br />
            <h3 class="widget-title">Used Skills</h3>
            <p>HTML5, CSS3, jQuery, Ruby &amp; Rails</p>
            <br />
            <h3 class="widget-title">Clients</h3>
            <p>BizCraft Incorporatin Ltd.</p>
            <p><a href="#" class="project-btn btn btn-primary">Project Link</a></p>
          </div>
        </div>
      </div>
      <!-- sidebar end -->
    </div><!-- Portfolio item row end -->
  </div><!-- Container end -->
</section><!-- Portfolio item end -->
@endsection