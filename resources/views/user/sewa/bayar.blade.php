@extends('templates.home')

@section('title', 'Pembayaran')

@section('content')
<section class="section bg-gray">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <!-- Left sidebar -->
      <div class="col-md-8">
        <div class="product-details">
          <h1 class="product-title">{{$sewa->barang->jenis_paket}}</h1>

          <div class="content">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Invoice Pembayaran Anda</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table table-hover table-bordered">
                  <tbody>
                    <tr>
                      <td>Nama</td>
                      <td>{{$sewa->user->nama}}</td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td>{{$sewa->user->alamat}}</td>
                    </tr>
                    <tr>
                      <td>No. KTP</td>
                      <td>{{$sewa->user->noktp}}</td>
                    </tr>
                    <tr>
                      <td>Paket Jasa</td>
                      <td>{{$sewa->barang->jenis_paket}}</td>
                    </tr>
                    <tr>
                      <td>Total Biaya</td>
                      <td class="harga">{{$sewa->barang->harga}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Sewa</td>
                      <td>{{$sewa->tanggal_sewa}}</td>
                    </tr>
                    <tr>
                      <td>Tanggal Transaksi</td>
                      <td>{{$sewa->tanggal_transaksi}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- bagian kanan --}}
      <div class="col-md-4">
        <div class="sidebar">
          <div class="widget price text-center">
            <h4>Harga</h4>
            <p class="harga" id="harga">{{$sewa->barang->harga}}</p>
          </div>
          <!-- Safety tips widget -->
          <div class="widget disclaimer">
            <h5 class="widget-header">Informasi Pembayaran</h5>
            <p>
              Silahkan melakukan pembayaran melalui Nomor Rekening dibawah ini :
            </p>
            <p>BNI - 0000821781 - Asep B</p>
            <p>BCA - 130382976121 - Budi A</p>
            <p>Lakukan Pembayaran dan Upload Bukti Transfer sebelum
              {{$sewa->tanggal_transaksi}}</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Upload Bukti Pembayaran
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="/user/sewa/{{$sewa->idpersewaan}}/bayar" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <input type="file" name="bukti" id="bukti">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script>
    $(document).ready(function () {
      var formatter = new Intl.NumberFormat('de-DE');
      
      var harga = $("#harga").text();
      var hargaConverted = formatter.format(harga);
      console.log(hargaConverted);
      $(".harga").text("Rp. " + hargaConverted);
    });
  </script>
  <!-- Container End -->
</section>
@endsection