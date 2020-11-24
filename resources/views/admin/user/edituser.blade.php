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

@endsection @section('pagetitle')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-display1 icon-gradient bg-premium-dark"> </i>
            </div>
            <div>
                Form Tambah User
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
        @foreach ($user as $item)
        <h5 class="card-title">Grid</h5>
        <form action="/admin/user/{{ $item->id }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <input type="hidden" name="{{ $item->id }}">
            <div class="position-relative row form-group">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input
                        name="nama"
                        id="nama"
                        placeholder="enter name"
                        type="text"
                        class="form-control"
                        value="{{ $item->nama }}"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input
                        name="email"
                        id="email"
                        placeholder="enter email"
                        type="email"
                        class="form-control"
                        value="{{ $item->email }}"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="password" class="col-sm-2 col-form-label"
                    >Password</label
                >
                <div class="col-sm-10">
                    <input
                        name="password"
                        id="password"
                        placeholder="enter password"
                        type="password"
                        class="form-control"
                        value="{{ $item->password }}"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="level" class="col-sm-2 col-form-label" value="{{ $item->level }}">Level</label>
                <div class="col-sm-10">
                    <select name="level" id="level" class="form-control">
                        <option value="user"  
                        @if ("user"==$item->level)
                            selected
                        @endif
                        >User</option>
                        <option value="admin" 
                        @if ("admin"==$item->level)
                                selected
                            @endif
                            >Admin</option>
                    </select>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="alamat" class="col-sm-2 col-form-label"
                    >Alamat</label
                >
                <div class="col-sm-10">
                    <input
                        name="alamat"
                        id="alamat"
                        placeholder="Enter address"
                        type="text"
                        class="form-control"
                        value="{{ $item->alamat }}"
                    />
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input
                        name="phone"
                        id="phone"
                        placeholder="Enter phone number"
                        type="text"
                        class="form-control"
                        value="{{ $item->notelepon }}"
                    />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="ktp" class="col-sm-2 col-form-label">No KTP</label>
                <div class="col-sm-10">
                    <input
                        name="ktp"
                        id="ktp"
                        placeholder="masukkan no ktp"
                        type="text"
                        class="form-control"
                        value="{{ $item->noktp }}"
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
        @endforeach
    </div>
</div>

@endsection
