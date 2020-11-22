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
      <a href="/admin/persewaan">
        <i class="metismenu-icon pe-7s-display2"></i>
        Persewaan
      </a>
    </li>
    <li>
      <a href="/admin/user" class="mm-active">
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
        Tabel User
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
            <div class="card-body"><h5 class="card-title">Daftar User</h5>
                <table class="mb-0 table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Level</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $count =0;
                      @endphp
                      @foreach ($user as $item)
                          <tr>
                            <th scope="row">{{ $count +=1 }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->level }}</td>
                            <td>
                              <a href="/admin/user/{{$item->id}}" class="badge badge-info">Detail</a>
                              <a href="/admin/user/{{$item->id}}/edit/" class="badge badge-warning">Edit</a>
                              <a href="/admin/user/{{$item->id}}" class="badge badge-danger">Hapus</a>
                          </td>
                          </tr>
                      @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection