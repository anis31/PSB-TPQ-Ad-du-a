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
									<!-- FUNCTION UNTUK MEMBUKA DAN MENUTUP FORM -->
									@if($app->value === "1")
									<h4>
										Status pendaftaran saat ini sedang <strong>DIBUKA</strong>
									</h4>
									@else
									<h4>
										Status pendaftaran saat ini sedang <strong>DITUTUP</strong>
									</h4>
									@endif
									<!-- END FUNCTION UNTUK MEMBUKA DAN MENUTUP FORM -->
								</div>
								<div class="panel-body">
									<p class="demo-button">
										<button type="button" class="btn btn-success btn-pendaftaran" data-status="1">Buka</button>
										<button type="button" class="btn btn-danger btn-pendaftaran" data-status="0">Tutup</button>
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
											<th>Status</th>
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
										<td>{{$hasil->status}}</td>
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

@push('scripts')
<script>
// ACTION SIMPAN DATA HALAQOH
$('.btn-pendaftaran').click(function(e) {
        e.preventDefault()
		var status = $(this).data('status');

        $.ajax({
            type: 'POST',
            url: '{{url("/app/edit-pendaftaran")}}',
            data: {
                '_token': '{{csrf_token()}}',
                'status': status
            },
            success: function(response){
                alert(response);
                location.reload();
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }

        })
    });

</script>
@endpush