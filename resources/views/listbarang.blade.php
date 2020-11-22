@extends('templates.home')

@section('title', 'Daftar Barang')

@section('content')
<section class="page-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Advance Search -->
        <div class="advance-search">
          <form>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="Cari Disini...">
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Kategori">
              </div>
              <div class="form-group col-md-3">
                <input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Paket">
              </div>
              <div class="form-group col-md-2">

                <button type="submit" class="btn btn-primary">Search Now</button>
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
      <div class="col-md-12">
        <div class="search-result bg-gray">
          <h2>Results For "Electronics"</h2>
          <p>123 Results on 12 December, 2017</p>
        </div>
      </div>
    </div>
    <div class="row">
      {{-- kategori --}}
      <div class="col-lg-3 col-md-4">
        <div class="category-sidebar">
          <div class="widget category-list">
            <h4 class="widget-header">Kategori</h4>
            <ul class="category-list">
              <li><a href="category.html">Paket Dekorasi <span>93</span></a></li>
              <li><a href="category.html">Dekorasi Tambahan <span>233</span></a></li>
            </ul>
          </div>

          <div class="widget category-list">
            <h4 class="widget-header">Paket</h4>
            <ul class="category-list">
              <li><a href="category.html">Wedding <span>93</span></a></li>
              <li><a href="category.html">Engangement <span>233</span></a></li>
              <li><a href="category.html">Birthday <span>183</span></a></li>
              <li><a href="category.html">Condolences <span>120</span></a></li>
              <li><a href="category.html">Celebration <span>40</span></a></li>
            </ul>
          </div>
        </div>
      </div>
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
            <div class="col-md-6">
              <div class="view">
                <strong>Views</strong>
                <ul class="list-inline view-switcher">
                  <li class="list-inline-item">
                    <a href="category.html"><i class="fa fa-th-large"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="category.html" class="text-info"><i class="fa fa-reorder"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- ad listing list  -->
        @for ($i = 0; $i < 5; $i++) <div class="ad-listing-list mt-20">
          <div class="row p-lg-3 p-sm-5 p-4">
            <div class="col-lg-4 align-self-center">
              <a href="/detail">
                <img src="{{ asset('images/products/products-1.jpg') }}" class="img-fluid" alt="">
              </a>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-6 col-md-10">
                  <div class="ad-listing-content">
                    <div>
                      <a href="/detail" class="font-weight-bold">11inch Macbook Air</a>
                    </div>
                    <ul class="list-inline mt-2 mb-3">
                      <li class="list-inline-item"><a href="category.html"> <i class="fa fa-folder-open-o"></i>
                          Electronics</a></li>
                      <li class="list-inline-item"><a href=""><i class="fa fa-calendar"></i>26th December</a></li>
                    </ul>
                    <p class="pr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
                  </div>
                </div>
                <div class="col-lg-6 align-self-center">
                  <div class="product-ratings float-lg-right pb-3">
                    <ul class="list-inline">
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      @endfor
      <!-- ad listing list  -->

      <!-- pagination -->
      <div class="pagination justify-content-center py-4">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- pagination -->
    </div>
  </div>
  </div>
</section>
@endsection