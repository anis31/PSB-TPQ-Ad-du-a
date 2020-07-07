@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                    <!-- Alert -->
                    @if(Session::has('sukses'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <i class="fa fa-check-circle"></i> {{ Session::get('sukses') }}
                        </div>
                    @endif
                    <!-- End Of Alert -->
                    <!-- Start Panel Heading -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar santri yang diterima</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
                                        <thead>
											<tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Panggilan</th>
                                                <th>L/P</th>
                                                <th>Umur</th>
                                                <th>Sekolah Asal</th>
                                                <th>Kelas</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
                                        <tbody>
                                        @foreach ($data_santri as $santri => $hasil)
                                        <tr>
                                            <td>{{ $santri + $data_santri ->firstitem() }}</td>
                                            <td><a href="/santri/{{$hasil->id}}/profil">{{$hasil->nama}}</a></td>
                                            <td><a href="/santri/{{$hasil->id}}/profil">{{$hasil->nama_panggilan}}</a></td>
                                            <td>{{$hasil->jenis_kelamin}}</td>
                                            <td>{{$hasil->umur}}</td>
                                            <td>{{$hasil->sekolah_asal}}</td>
                                            <td>{{$hasil->kelas}}</td>
                                            <td>{{$hasil->nama_ortu}}</td>
                                            <td>
                                                <a href="/santri/{{$hasil->id}}/edit" class="btn btn-warning btn-xs"><i class="lnr lnr-pencil"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
										</tbody>
                                    </table>
                                    {{ $data_santri->links() }}
                                </div>
                        </div>
                     <!-- End Panel Heading -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop