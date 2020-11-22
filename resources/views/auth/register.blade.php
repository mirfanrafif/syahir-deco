@extends('templates.home')

@section('title', 'Daftar')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="card-body">
                <form method="POST" action="/register">
                    @csrf

                    {{-- nama --}}
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{-- alamat --}}
                    <div class="form-group row">
                        <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                        <div class="col-md-6">
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                                name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{-- notelepon --}}
                    <div class="form-group row">
                        <label for="notelepon"
                            class="col-md-4 col-form-label text-md-right">{{ __('No. Telepon / HP') }}</label>

                        <div class="col-md-6">
                            <input id="notelepon" type="text"
                                class="form-control @error('notelepon') is-invalid @enderror" name="notelepon"
                                value="{{ old('notelepon') }}" required autocomplete="notelepon" autofocus>

                            @error('notelepon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{-- no ktp --}}
                    <div class="form-group row">
                        <label for="noktp" class="col-md-4 col-form-label text-md-right">{{ __('No. KTP') }}</label>

                        <div class="col-md-6">
                            <input id="noktp" type="text" class="form-control @error('noktp') is-invalid @enderror"
                                name="noktp" value="{{ old('noktp') }}" required autocomplete="noktp" autofocus>

                            @error('noktp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection