@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <!-- INFO DATA SANTRI -->
                        <!-- Panel Heading -->
                        <div class="panel-heading">
							<h3 class="panel-title">Overview Data Pendaftar Calon Santri Baru</h3>
						</div>
                        <!-- END OF Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-male"></i></span>
                                        <p>
                                            <span class="number">{{$data_laki}}</span>
                                            <span class="title">Laki-Laki</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-female"></i></span>
                                        <p>
                                            <span class="number">{{$data_perempuan}}</span>
                                            <span class="title">Perempuan</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                        <p>
                                            <span class="number text-success">{{$jumlah_pendaftar}}</span>
                                            <span class="title text-success">Total</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF Panel Body -->
                        <!-- END OF INFO DATA SANTRI -->
                        <!-- ######################## -->
                        <!-- INFO DATA GURU -->
                        <!-- Panel Heading -->
                        <div class="panel-heading">
							<h3 class="panel-title">Overview Data Guru TPQ</h3>
						</div>
                        <!-- END OF Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-male"></i></span>
                                        <p>
                                            <span class="number">{{$data_ustadz}}</span>
                                            <span class="title">Ustadz</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-female"></i></span>
                                        <p>
                                            <span class="number">{{$data_ustadzah}}</span>
                                            <span class="title">Ustadzah</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                        <p>
                                            <span class="number text-success">{{$jumlah_guru}}</span>
                                            <span class="title text-success">Total</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF Panel Body -->
                        <!-- END OF INFO DATA GURU -->

                        <div class="panel-heading">
							<h3 class="panel-title">Overview Data Santri TPQ</h3>
						</div>
                        <!-- END OF Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-male"></i></span>
                                        <p>
                                            <span class="number">{{$data_santri_L}}</span>
                                            <span class="title">Laki-Laki</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-female"></i></span>
                                        <p>
                                            <span class="number">{{$data_santri_P}}</span>
                                            <span class="title">Perempuan</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                        <p>
                                            <span class="number text-success">{{$jumlah_santri}}</span>
                                            <span class="title text-success">Total</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF Panel Body -->
                        <!-- END OF INFO DATA SANTRI -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop