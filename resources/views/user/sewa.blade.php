@extends('templates.home')

@section('title', 'Pesan')

@section('content')
<section class="ad-post bg-gray py-5">
  <div class="container">
    <form action="/sewa" method="POST">

      @csrf
      <!-- user-information start -->
      <fieldset class="border p-4 my-5 seller-information bg-white">
        <div class="row">
          <div class="col-lg-12">
            <h3>Data Diri</h3>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Nama:</h6>
            <input type="text" name="nama" placeholder="Nama Kamu" value="{{Auth::user()->nama}}" disabled="disabled"
              class="border w-100 p-2">
            <h6 class="font-weight-bold pt-4 pb-1">No. HP:</h6>
            <input type="text" name="nohp" placeholder="0823823023829" value="{{Auth::user()->nohp}}"
              class="border w-100 p-2" disabled="disabled">
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Email:</h6>
            <input type="email" name="email" placeholder="nama@mail.com" value="{{Auth::user()->email}}"
              disabled="disabled" class="border w-100 p-2">
            <h6 class="font-weight-bold pt-4 pb-1">No. KTP:</h6>
            <input type="text" name="noktp" placeholder="Jl. Bromo No. 2" value="{{Auth::user()->noktp}}"
              disabled="disabled" class="border w-100 p-2">
          </div>
        </div>
      </fieldset>
      <!-- user-information end-->

      <!-- Post Your ad start -->
      <fieldset class="border bg-white p-4 mb-5">
        <div class="row">
          <div class="col-lg-12">
            <h3>Pesanan Anda</h3>
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Jenis Paket</h6>
            <div class="form-group">
              <select name="barang_idbarang" id="idbarang" class="form-control">
                @foreach ($barangs as $barang)
                <option value="{{$barang->idbarang}}">{{$barang->jenis_paket}}</option>
                @endforeach
              </select>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <h6 class="font-weight-bold pt-4 pb-1">Tanggal Sewa</h6>
              <input type="date" name="tanggal_sewa" id="tanggal_sewa"
                class="form-control @error('tanggal_sewa') is-invalid @enderror">
              @error('tanggal_sewa')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
      </fieldset>
      <!-- Post Your ad end -->

      <!-- submit button -->
      <button type="submit" class="btn btn-primary d-block mt-2">Pesan Sekarang</button>
    </form>
  </div>
</section>
@endsection