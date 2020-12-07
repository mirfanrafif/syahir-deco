@extends('templates.admin-template') @section('title', 'Dashboard')
@section('navigation')
<ul class="vertical-nav-menu">
    <li class="app-sidebar__heading">Dashboards</li>
    <li>
        <a href="/admin">
            <i class="metismenu-icon pe-7s-display2"></i>
            Dashboard
        </a>
    </li>
    <li class="app-sidebar__heading">Admin</li>

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
        <a href="/admin/user">
            <i class="metismenu-icon pe-7s-display2"></i>
            User
        </a>
    </li>
</ul>

@endsection @section('pagetitle')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark"> </i>
            </div>
            <div>
                Form Edit Persewaan
                <div class="page-title-subheading">
                    Wide selection of forms controls, using the Bootstrap 4 code
                    base, but built with React.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Grid</h5>
        <form action="/admin/persewaan/{{ $sewa->idpersewaan }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <div class="position-relative row form-group">
                <label for="tanggal_sewa" class="col-sm-2 col-form-label">Tanggal Sewa</label>
                <div class="col-sm-10">
                    <input name="tanggal_sewa" id="tanggal_sewa" placeholder="enter tanggal sewa" type="date"
                        class="form-control" value="{{ $sewa->tanggal_sewa }}" />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="tanggal_transaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                <div class="col-sm-10">
                    <input name="tanggal_transaksi" id="tanggal_transaksi" placeholder="enter tanggal transaksi"
                        type="date" class="form-control" value="{{ $sewa->tanggal_transaksi }}" />
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" id="status" class="form-control">
                        <option value="0">--------</option>
                        <option value="-1">Tolak</option>
                        <option value="1">Terima</option>
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="barang" class="col-sm-2 col-form-label">Barang</label>
                <div class="col-sm-10">
                    <select name="barang" id="barang" class="form-control">
                        <option value="-">---</option>
                        @foreach ($barang as $item)
                        <option value="{{ $item->idbarang }}"
                            @if ($sewa->barang_idbarang==$item->idbarang)
                                selected
                            @endif
                            >{{ $item->jenis_paket }}</option>

                        @endforeach
                    </select>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="user" class="col-sm-2 col-form-label">User</label>
                <div class="col-sm-10">
                    <select name="user" id="user" class="form-control">
                        <option value="-">---</option>
                        @foreach ($user as $item)
                        <option value="{{ $item->id }}"
                            @if ($sewa->user_id==$item->id)
                                selected
                            @endif
                            >{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <fieldset class="position-relative row form-group">
                <legend class="col-form-label col-sm-2">File Upload</legend>
                <div class="col-sm-10">
                        <div class="col-sm-10">
                            <img src="{{ Storage::url($sewa->nama_file_bukti) }}" class="card-img-top" alt="Bukti" >
                        </div>
                        
                </div>
            </fieldset>

            
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <button class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
