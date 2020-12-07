@extends('templates.admin-template')

@section('title', 'Dashboard')

@section('navigation')
<ul class="vertical-nav-menu">
    <li class="app-sidebar__heading">Dashboards</li>
    <li>
      <a href="/admin" >
          <i class="metismenu-icon pe-7s-display2"></i>
        Dashboard
      </a>
    </li>
    <li class="app-sidebar__heading">
      Admin
    </li>
    
    <li>
      <a href="/admin/barang">
        <i class="metismenu-icon pe-7s-display2"></i>
        Barang
      </a>
    </li>
    <li>
      <a href="/admin/persewaan" class="mm-active">
        <i class="metismenu-icon pe-7s-display2"></i>
        Persewaan
      </a>
    </li>
    <li>
      <a href="/admin/user" >
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
        Tabel Sewa
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
            <div class="card-body"><h5 class="card-title">Daftar Persewaan</h5>
                <table class="mb-0 table table-striped">
                  <thead>
                    <tr>
                      {{-- <th>#</th> --}}
                      <th>Tanggal Sewa</th>
                      <th>Tanggal Transaksi</th>
                      <th>Barang</th>
                      <th>User</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $count =0;
                    @endphp
                    @foreach ($sewa as $item)
                        <tr>
                          {{-- <th scope="row">{{ $count +=1 }}</th> --}}
                          <td>{{ $item->tanggal_sewa }}</td>
                          <td>{{ $item->tanggal_transaksi }}</td>
                          <td>{{ $item->barang->jenis_paket }}</td>
                          <td>{{ $item->user->nama }}</td>
                          <td>
                            @switch($item->status)
                                @case(-1)
                                    Ditolak
                                    @break
                                @case(0)
                                    Belum di acc
                                    @break
                                @case(1)
                                    Diterima
                                    @break
                                @default
                                    
                            @endswitch
                           
                          <form action="/admin/persewaan/{{ $item->idpersewaan }}" method="post">
                            @csrf
                            @method('DELETE')
                          <td>
                            {{-- <a href="/admin/barang/{{$item->idbarang}}" class="badge badge-info">Detail</a> --}}
                            <a href="/admin/persewaan/{{$item->idpersewaan}}/edit/" class="mb-2 mr-2 btn btn-warning">Edit</a>
                            <button class="mb-2 mr-2 btn btn-danger" type="submit" >Hapus</button>
                          </td>
                        </form>
                        </tr>
                    @endforeach
                  
                  </tbody>
                </table>
            </div>
        </div>
        {{ $sewa->links() }}
    </div>
</div>

@endsection