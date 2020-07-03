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
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Data Wawancara Santri Baru</h3>
                                    </div>
                                    <div class="panel-body">
                                    <a href="/psb/insert_wawancara" class="btn btn-success btn-xs"><i class="fa fa-plus-square"></i> Tambah </a>
                                    <div class="table-responsive">
                                        <table class="table project-table table-responsive table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th class="text-nowrap">Nama Lengkap</th>
                                                    <th>L/P</th>
                                                    <th>Hafalan</th>
                                                    <th class="text-nowrap">Surah Yg Dihafal</th>
                                                    <th>Tartil</th>
                                                    <th>Jilid</th>
                                                    <th class="text-center">Catatan Quran</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($data_wawancara as $wawancara => $hasil)
                                            <tr>
                                                <td>{{ $wawancara + $data_wawancara->firstitem() }}</td>
                                                <td class="text-nowrap"><a href="/psb/{{$hasil->id}}/detail_wawancara">{{$hasil->relasi_daftar['nama']}}</a></td>
                                                <td>{{$hasil->relasi_daftar['jenis_kelamin']}}</td>
                                                <td>{{$hasil->hafalan}}</td>
                                                <td class="text-nowrap">{{$hasil->surat_dihafal}}</td>
                                                <td>{{$hasil->tartil}}</td>
                                                <td class="text-nowrap">{{$hasil->jilid}}</td>
                                                <td>{{$hasil->catatan_quran}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{$data_wawancara->links()}}
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- MODAL ilmu -->

<!-- End of MODAL ilmu -->
@stop