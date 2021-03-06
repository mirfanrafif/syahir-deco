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
    <div class="page-title-actions">
      <a href="/admin/user/create" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
        <span class="btn-icon-wrapper pr-2 opacity-7">
          <i class="fa fa-business-time fa-w-20"></i>
        </span>
        ADD USER
      </a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="main-card mb-3 card">
      <div class="card-body">
        <h5 class="card-title">Daftar User</h5>
        <table class="mb-0 table table-striped">
          <thead>
            <tr>
              {{-- <th>#</th> --}}
              <th>Nama</th>
              <th>Email</th>
              <th>Level</th>
              <th>Alamat</th>
              <th>No Telpon</th>
            </tr>
          </thead>
          <tbody>
            @php
            $count =0;
            @endphp
            @foreach ($user as $item)
            <tr>
              {{-- <th scope="row">{{ $count +=1 }}</th> --}}
              <td>{{ $item->nama }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->level }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->notelepon }}</td>
              <td>
                {{-- <a href="/admin/user/{{$item->id}}" class="badge badge-info">Detail</a> --}}
                <form action="/admin/user/{{ $item->id }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="/admin/user/{{$item->id}}/edit/" class="mb-2 mr-2 btn btn-warning">Edit</a>
                  <button class="mb-2 mr-2 btn btn-danger" type="submit">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>

    </div>
    {{ $user->links() }}
  </div>
</div>

@endsection