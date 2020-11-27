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
                <i class="pe-7s-display1 icon-gradient bg-premium-dark"> </i>
            </div>
            <div>
                Form Edit Barang
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
<div class="main-card mb-3 card">
    <div class="card-body">
        @foreach($barang as $item)
        <h5 class="card-title">Data Barang</h5>
        <form action="/admin/barang/{{ $item->idbarang }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <input type="hidden" name="{{ $item->idbarang }}" />

            <div class="position-relative row form-group">
                <label for="jenis_paket" class="col-sm-2 col-form-label">Jenis Paket</label>
                <div class="col-sm-10">
                    <input name="jenis_paket" id="jenis_paket" placeholder="enter name paket" type="text"
                        class="form-control" value="{{ $item->jenis_paket }}" />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input name="keterangan" id="keterangan" placeholder="enter keterangan" type="text"
                        class="form-control" value="{{ $item->keterangan }}" />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input name="stok" id="stok" placeholder="enter stok" type="number" class="form-control"
                        value="{{ $item->stok }}" />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input name="harga" id="harga" placeholder="enter harga" type="number" class="form-control"
                        value="{{ $item->harga }}" />
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" id="kategori" class="form-control">
                    <option value="-">---</option>
                    <option value="Paket Dekorasi">Paket Dekorasi</option>
                    <option value="Dekorasi Tambahan">Dekorasi Tambahan</option>
                    </select>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="kategori_acara" class="col-sm-2 col-form-label">Kategori Acara </label>
                        <div class="col-sm-10">
                            <select name="kategori_acara" id="kategori_acara" class="form-control">
                            <option value="-">---</option>
                            <option value="Wedding">Wedding</option>
                            </select>
                        </div>
            </div>

            <fieldset class="position-relative row form-group">
                <legend class="col-form-label col-sm-2">File Upload</legend>
                <div class="col-sm-10">
                    <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                        <div class="col-sm-10"><input name="nama_file_foto" id="nama_file_foto" type="file" class="form-control-file">
                            <small class="form-text text-muted">Tempat untuk upload gambar yang berbentuk PNG/JPG/SVG.</small>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <button class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>

@endsection