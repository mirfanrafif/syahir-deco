@extends('templates.home')

@section('title', 'Persewaan')

@section('content')
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="{{ asset('images/user/user-thumb.jpg') }}" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{Auth::user()->nama}}</h5>
						<p>{{Auth::user()->email}}7</p>
						<a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="dashboard-my-ads.html"><i class="fa fa-user"></i> Transaksiku</a></li>
						</ul>
					</div>

					<!-- delete-account modal -->
					<!-- delete account popup modal start-->
					<!-- Modal -->
					<!-- delete account popup modal end-->
					<!-- delete-account modal -->

				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My Ads</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Image</th>
								<th>Product Title</th>
								<th class="text-center">Kategori</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($dataSewa as $sewa)
							<tr>
								<td class="product-thumb">
									<img width="80px" height="auto" src="{{ asset('images/products/products-1.jpg') }}"
										alt="image description"></td>
								<td class="product-details">
									<h3 class="title">{{$sewa->barang->jenis_paket}}</h3>
									<span class="add-id"><strong>ID Sewa</strong> {{$sewa->idpersewaan}}</span>
									<span><strong>Tanggal Sewa: </strong><time>{{$sewa->tanggal_sewa}}</time> </span>
									<span class="status active"><strong>Status</strong>{{$sewa->status}}</span>
									<span class="location"><strong>Alamat</strong>{{$sewa->user->alamat}}</span>
								</td>
								<td class="product-category"><span class="categories">{{$sewa->barang->kategori}}</span></td>
								<td class="action">
									@if ($sewa->status == 0)
									<a href="/user/sewa/{{$sewa->idpersewaan}}/bayar" class="btn btn-primary"> <i
											class="fas fa-receipt"></i></span></a>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>

				<!-- pagination -->
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->

			</div>
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection