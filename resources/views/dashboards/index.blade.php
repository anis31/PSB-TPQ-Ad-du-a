@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <!-- Panel Heading -->
                        <div class="panel-heading">
							<h3 class="panel-title">Overview Data Santri TPQ</h3>
							<p class="panel-subtitle">Update: {{ date('d-m-Y') }}</p>
						</div>
                        <!-- END OF Panel Heading -->
                        <!-- Panel Body -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                        <p>
                                            <span class="number">{{ $data_santri->jenis_kelamin->count() }}</span>
                                            <span class="title">Laki-Laki</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="metric">
                                        <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                        <p>
                                            <span class="number">35%</span>
                                            <span class="title">Perempuan</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END OF Panel Body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop