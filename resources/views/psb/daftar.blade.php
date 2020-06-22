@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
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
									@foreach ($data_pendaftaran as $daftar)
									<tr>
										<td><a href="/psb/{{$daftar->id}}/profil">{{$daftar->nama}}</a></td>
										<td><a href="/psb/{{$daftar->id}}/profil">{{$daftar->nama_panggilan}}</a></td>
										<td>{{$daftar->umur}}</td>
										<td>{{$daftar->sekolah_asal}}</td>
										<td>{{$daftar->kelas}}</td>
										<td>{{$daftar->jenis_kelamin}}</td>
										<td>{{$daftar->nama_ortu}}</td>
									</tr>
									@endforeach
									</tbody>
								</table>
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