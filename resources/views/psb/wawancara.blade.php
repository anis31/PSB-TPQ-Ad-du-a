@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Wawancara Santri Baru</h3>
                                    <div class="right">
                                        <button type="button" class="btn-create" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table project-table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Hafalan</th>
                                                <th>Surah Yg Dihafal</th>
                                                <th>Tartil</th>
                                                <th>Jilid</th>
                                                <th>Catatan Quran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($data_wawancara as $wawancara)
                                        <tr>
                                            <td>{{$wawancara->relasi_daftar['nama']}}</td>
                                            <td>{{$wawancara->relasi_daftar['jenis_kelamin']}}</td>
                                            <td>{{$wawancara->hafalan}}</td>
                                            <td>{{$wawancara->surat_dihafal}}</td>
                                            <td>{{$wawancara->tartil}}</td>
                                            <td>{{$wawancara->jilid}}</td>
                                            <td>{{$wawancara->catatan_quran}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>


@stop