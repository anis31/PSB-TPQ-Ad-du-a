@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- Alert -->
					@if(Session::has('sukses'))
						<div class="alert alert-success alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							<i class="fa fa-check-circle"></i> {{ Session::get('sukses') }}
						</div>
					@endif
					<!-- End Of Alert -->
					<h3 class="page-title">Kelola Pendaftaran</h3>
					<div class="row">
						<div class="col-lg-12">
							<!-- Panel Atur pendaftaran -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Form Pendaftaran</h3>
								</div>
								<div class="panel-body">
									<p class="demo-button">
										<button type="button" class="btn btn-success">Buka</button>
										<button type="button" class="btn btn-danger">Tutup</button>
									</p>
								</div>
							</div>
							<!-- END Panel Atur pendaftaran -->
							<!-- Panel Data Pendaftar -->
					
						<!-- TABLE NO PADDING -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Pendaftar</h3>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Lengkap</th>
											<th>Nama Panggilan</th>
											<th>Umur</th>
											<th>Sekolah Asal</th>
											<th>Kelas</th>
											<th>L/P</th>
											<th>Nama Orang Tua</th>
										</tr>
									</thead>
									<tbody>
									@foreach ($data_pendaftaran as $daftar => $hasil)
									<tr>
										<td>{{ $daftar + $data_pendaftaran->firstitem() }}</td>
										<td><a href="/psb/{{$hasil->id}}/profil">{{$hasil->nama}}</a></td>
										<td><a href="/psb/{{$hasil->id}}/profil">{{$hasil->nama_panggilan}}</a></td>
										<td>{{$hasil->umur}}</td>
										<td>{{$hasil->sekolah_asal}}</td>
										<td>{{$hasil->kelas}}</td>
										<td>{{$hasil->jenis_kelamin}}</td>
										<td>{{$hasil->nama_ortu}}</td>
									</tr>
									@endforeach
									</tbody>
								</table>
								{{ $data_pendaftaran->links() }}
							</div>
						</div>
						<!-- END TABLE NO PADDING -->
					
							<!-- END Panel Data Pendaftar -->
						</div>
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@stop