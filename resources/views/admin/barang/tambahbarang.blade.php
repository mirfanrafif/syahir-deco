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
        <a href="/admin/user" >
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
                Form Tambah Barang
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
        <h5 class="card-title">Data Barang</h5>
        <form action="/admin/barang" method="post">
            {{ csrf_field() }}
            <div class="position-relative row form-group">
                <label for="jenis_paket" class="col-sm-2 col-form-label">Jenis Paket</label>
                <div class="col-sm-10">
                    <input
                        name="jenis_paket"
                        id="jenispaket"
                        placeholder="enter name paket"
                        type="text"
                        class="form-control"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input
                        name="keterangan"
                        id="keterangan"
                        placeholder="enter ketranagan"
                        type="text"
                        class="form-control"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="stok" class="col-sm-2 col-form-label"
                    >Stok</label
                >
                <div class="col-sm-10">
                    <input
                        name="stok"
                        id="stok"
                        placeholder="Enter stok"
                        type="number"
                        class="form-control"
                    />
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input
                        name="harga"
                        id="harga"
                        placeholder="Enter phone number"
                        type="number"
                        class="form-control"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input
                        name="kategori"
                        id="kategori"
                        placeholder="masukkan kategori"
                        type="text"
                        class="form-control"
                    />
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="kategori_acara" class="col-sm-2 col-form-label">Kategori Acara</label>
                <div class="col-sm-10">
                    <input
                        name="kategori_acara"
                        id="kategori_acara"
                        placeholder="masukkan kategori acara"
                        type="text"
                        class="form-control"
                    />
                </div>
            </div>

            <fieldset class="position-relative row form-group">
                <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                <div class="col-sm-10">
                    <div class="position-relative form-check">
                        <label class="form-check-label"
                            ><input
                                name="radio2"
                                type="radio"
                                class="form-check-input"
                            />
                            Option one is this and that—be sure to include why
                            it's great</label
                        >
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label"
                            ><input
                                name="radio2"
                                type="radio"
                                class="form-check-input"
                            />
                            Option two can be something else and selecting it
                            will deselect option one</label
                        >
                    </div>
                    <div class="position-relative form-check disabled">
                        <label class="form-check-label"
                            ><input
                                name="radio2"
                                disabled=""
                                type="radio"
                                class="form-check-input"
                            />
                            Option three is disabled</label
                        >
                    </div>
                </div>
            </fieldset>
            <div class="position-relative row form-group">
                <label for="checkbox2" class="col-sm-2 col-form-label"
                    >Checkbox</label
                >
                <div class="col-sm-10">
                    <div class="position-relative form-check">
                        <label class="form-check-label"
                            ><input
                                id="checkbox2"
                                type="checkbox"
                                class="form-check-input"
                            />
                            Check me out</label
                        >
                    </div>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <button class="btn btn-secondary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
