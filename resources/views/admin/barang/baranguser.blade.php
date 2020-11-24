@extends('templates.admin-template')

@section('title', 'Dashboard')

@section('navigation')
<ul class="vertical-nav-menu">
    <li class="app-sidebar__heading">Dashboards</li>
    <li>
        <a href="/admin">
            <i class="metismenu-icon pe-7s-display2"></i>
            Dashboard
        </a>
    </li>
    <li class="app-sidebar__heading">
        Admin
    </li>

    <li>
        <a href="/admin/barang" class="mm-active">
            <i class="metismenu-icon pe-7s-display2"></i>
            Barang
        </a>
    </li>
    <li>
        <a href="/admin/persewaan">
            <i class="metismenu-icon pe-7s-display2"></i>
            Persewaan
        </a>
    </li>
    <li>
        <a href="/admin/user">
            <i class="metismenu-icon pe-7s-display2"></i>
            User
        </a>
    </li>

</ul>

@endsection

@section('pagetitle')
    
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-lock icon-gradient bg-malibu-beach"> </i>
      </div>
      <div>
        Tabel Barang
        <div class="page-title-subheading">
          Wide selection of forms controls, using the Bootstrap 4 code
          base, but built with React.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Daftar Barang</h5>
                <table class="mb-0 table table-striped">
                    <thead>
                        <tr>
                          <th>#</th>
                          <th>Jenis Paket</th>
                          <th>Keterangan</th>
                          <th>Stok</th>
                          <th>Harga</th>
                          <th>Kategori</th>
                          <th>Kategori Acara</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $count =0;
                        @endphp
                        @foreach ($barang as $item)
                            <tr>
                              <th scope="row">{{ $count +=1 }}</th>
                              <td>{{ $item->jenis_paket }}</td>
                              <td>{{ $item->keterangan }}</td>
                              <td>{{ $item->stok }}</td>
                              <td>{{ $item->harga }}</td>
                              <td>{{ $item->kategori }}</td>
                              <td>{{ $item->kategori_acara }}</td>
                            <form action="/admin/barang/{{ $item->idbarang }}" method="post">
                              @csrf
                              @method('DELETE')
                            <td>
                              {{-- <a href="/admin/barang/{{$item->idbarang}}" class="badge badge-info">Detail</a> --}}
                              <a href="/admin/barang/{{$item->idbarang}}/edit/" class="badge badge-warning">Edit</a>
                              <a href="/admin/barang/{{$item->idbarang}}" class="badge badge-danger">Hapus</a>
                            </td>
                          </form>
                        @endforeach
                      
                      </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection