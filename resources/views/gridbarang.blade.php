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
                <a href="/barang?kategori=paket">Paket Dekorasi <span>93</span></a>
              </li>
              <li>
                <a href="/barang?kategori=tambahan">Dekorasi Tambahan <span>233</span></a>
              </li>
            </ul>
          </div>

          <div class="widget category-list">
            <h4 class="widget-header">Paket</h4>
            <ul class="category-list">
              <li>
                <a href="/barang?paket=Wedding">Wedding <span>93</span></a>
              </li>
              <li>
                <a href="/barang?paket=Engagement">Engangement <span>233</span></a>
              </li>
              <li>
                <a href="/barang?paket=Birthday">Birthday <span>183</span></a>
              </li>
              <li>
                <a href="/barang?paket=Condolences">Condolences <span>120</span></a>
              </li>
              <li>
                <a href="category.html">Celebration <span>40</span></a>
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
              <strong>Urutkan</strong>
              <select>
                <option>Paket Terbaru</option>
                <option value="1">Paling Populer</option>
                <option value="2">Harga Terendah</option>
                <option value="4">Harga Tertinggi</option>
              </select>
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
            {{-- {{json_encode($barangs)}} --}}
          </div>
        </div>
        <div class="pagination justify-content-center py-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection