@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <!-- Alert -->
                @if(Session::has('sukses'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <i class="fa fa-check-circle"></i> {{ Session::get('sukses') }}
                    </div>
                @endif
                <!-- End Of Alert -->
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
                                <h3 class="name">{{$daftar->nama}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        Umur <span>{{$daftar->umur}} th</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        Orang Tua <span>{{$daftar->nama_ortu}}</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        No. HP <span>{{$daftar->nomor_hp}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Biodata</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Tempat Lahir <span>{{$daftar->tempat_lahir}}</span></li>
                                    <li>Tanggal Lahir <span>{{$daftar->tgl_lahir}}</span></li>
                                    <li>Umur <span>{{$daftar->umur}} tahun</span></li>
                                    <li>Jenis Kelamin <span>{{$daftar->jenis_kelamin}}</span></li>
                                    <li>Nama Orang Tua <span>{{$daftar->nama_ortu}}</span></li>
                                    <li>No. HP <span>{{$daftar->nomor_hp}}</span></li>
                                    <li>Sekolah Asal <span>{{$daftar->sekolah_asal}}</span></li>
                                    <li>Kelas <span>{{$daftar->kelas}}</span></li>
                                    <li>Alamat <span>{{$daftar->alamat}}</span></li>
                                </ul>
                            </div>
                            <div class="text-center"><a href="/psb/{{$daftar->id}}/edit" class="btn btn-primary">Edit Profil</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@stop()