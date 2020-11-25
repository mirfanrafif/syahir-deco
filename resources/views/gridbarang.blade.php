@extends('templates.home')
@section('title', 'Daftar Barang')
@section('content')
<section class="page-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Advance Search -->
        <div class="advance-search">
          <form action="" method="GET">
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" class="form-control my-2 my-lg-0" id="keyword" name="keywords"
                  placeholder="Cari Disini..." />
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control my-2 my-lg-0" id="kategori" name="kategori"
                  placeholder="Kategori" />
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control my-2 my-lg-0" id="kategori_acara" name="paket"
                  placeholder="Paket" />
              </div>
              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">
                  Search Now
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    {{-- hasil pencarian --}}
    <div class="row">
      {{-- kategori --}}
      <div class="col-lg-3 col-md-4">
        <div class="category-sidebar">
          <div class="widget category-list">
            <h4 class="widget-header">Kategori</h4>
            <ul class="category-list">
              <li>
                <a href="/barang?kategori=paket">Paket Dekorasi</a>
              </li>
              <li>
                <a href="/barang?kategori=tambahan">Dekorasi Tambahan</a>
              </li>
            </ul>
          </div>

          <div class="widget category-list">
            <h4 class="widget-header">Paket</h4>
            <ul class="category-list">
              <li>
                <a href="/barang?paket=Wedding">Wedding</a>
              </li>
              <li>
                <a href="/barang?paket=Engagement">Engangement</a>
              </li>
              <li>
                <a href="/barang?paket=Birthday">Birthday</a>
              </li>
              <li>
                <a href="/barang?paket=Condolences">Condolences</a>
              </li>
              <li>
                <a href="/barang?paket=Celebration">Celebration</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      {{-- bagian utama --}}
      <div class="col-lg-9 col-md-8">
        {{-- filter --}}
        <div class="category-search-filter">
          <div class="row">
            <div class="col-md-6">
              <strong>Data Paket</strong>
            </div>
          </div>
        </div>
        {{-- grid --}}
        <div class="product-grid-list">
          <div class="row mt-30">
            @if (count($barangs) > 0)
            @foreach ($barangs as $barang)
            <div class="col-sm-12 col-lg-4 col-md-6">
              <!-- product card -->
              <div class="product-item bg-light">
                <div class="card">
                  <div class="thumb-content">
                    <!-- <div class="price">$200</div> -->
                    <a href="/barang/{{$barang->idbarang}}/detail">
                      <img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap" />
                    </a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="/barang/{{$barang->idbarang}}/detail">{{$barang->jenis_paket}}</a>
                    </h4>
                    <ul class="list-inline product-meta">
                      <li class="list-inline-item">
                        <a href="single.html"><i class="fa fa-folder-open-o"></i>{{$barang->kategori}}</a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#"><i class="fa fa-calendar"></i>{{$barang->kategori_acara}}</a>
                      </li>
                    </ul>
                    <p class="card-text text-truncate">
                      {{$barang->keterangan}}
                    </p>
                    <h3>{{$barang->harga}}</h3>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <h1 class="text-center">Data Kosong</h1>
            @endif
          </div>
        </div>
        {{ $barangs->links() }}
      </div>
    </div>
  </div>
</section>
@endsection