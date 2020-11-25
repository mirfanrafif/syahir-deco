@extends('templates.home')

@section('title', 'Detail Barang')

@section('content')
<section class="section bg-gray">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <!-- Left sidebar -->
      <div class="col-md-8">
        <div class="product-details">
          <h1 class="product-title">{{$barang->jenis_paket}}</h1>
          <div class="product-meta">
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Kategori<a
                  href="">{{$barang->kategori}}</a></li>
              <li class="list-inline-item"><i class="fa fa-location-arrow"></i> Kategori Acara<a
                  href="">{{$barang->kategori_acara}}</a>
              </li>
            </ul>
          </div>

          <!-- product slider -->
          <img class="d-block img-fluid w-100" src="{{asset('images/products/products-1.jpg')}}" alt="product-img">
          <!-- product slider -->

          <div class="content mt-5 pt-5">
            <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Product Details</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="tab-title">Product Description</h3>
                <p>{{$barang->keterangan}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- bagian kanan --}}
      <div class="col-md-4">
        <div class="sidebar">
          <div class="widget price text-center">
            <h4>Harga</h4>
            <p id="harga">{{$barang->harga}}</p>
          </div>
          <!-- Safety tips widget -->
          <div class="widget disclaimer">
            <h5 class="widget-header">Cek Ketersediaan</h5>
            <form action="">
              <div class="form-group">
                <label for="cektanggal">Tanggal</label>
                <input type="date" name="cektanggal" id="cektanggal" class="form-control" placeholder=""
                  aria-describedby="helpId">
              </div>
              <input type="submit" value="Cek" class="btn btn-primary">
            </form>
          </div>
          <!-- Coupon Widget -->
          <div class="widget coupon text-center">
            <!-- Coupon description -->
            <p>Tertarik dengan Produk Kami?
            </p>
            <!-- Submii button -->
            <a href="/sewa" class="btn btn-transparent-white">Pesan Sekarang</a>
          </div>

        </div>
      </div>

    </div>
  </div>

  <script>
    $(document).ready(function () {
      var formatter = new Intl.NumberFormat('de-DE');
      
      var harga = $("#harga").text();
      var hargaConverted = formatter.format(harga);
      console.log(hargaConverted);
      $("#harga").text("Rp. " + hargaConverted);
    });
  </script>
  <!-- Container End -->
</section>
@endsection