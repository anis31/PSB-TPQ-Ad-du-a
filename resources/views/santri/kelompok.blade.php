@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
            <!-- Panel tambah kelompok -->
            <div class="panel col-md-12">
                <div class="panel-heading">
                    <h3 class="panel-title">Data Kelompok</h3>
                </div>
                <div class="panel-body">
                    <p class="demo-button">
                        <button type="button" class="btn btn-success">Tambah</button>
                    </p>
                </div>
            </div>
            <!-- Akhir Panel tambah kelompok -->
                <div class="col-md-6">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="heading">Kelompok 1A</span></h3>
                            <ul class="list-unstyled list-justify">
                                <li>Pengajar <span>Ustadz Fulan</span></li>
                                <li>Nomor HP <span>121212</span></li>
                                <li type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Steve</td>
                                        <td>Jobs</td>
                                        <td>@steve</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Simon</td>
                                        <td>Philips</td>
                                        <td>@simon</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jane</td>
                                        <td>Doe</td>
                                        <td>@jane</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
                <div class="col-md-6">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="heading">Kelompok 2A</span></h3>
                            <ul class="list-unstyled list-justify">
                                <li>Pengajar <span>Ustadzah Fulanah</span></li>
                                <li>Nomor HP <span>331133</span></li>
                                <li type="button" class="btn btn-sm btn-warning">Edit</li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Steve</td>
                                        <td>Jobs</td>
                                        <td>@steve</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Simon</td>
                                        <td>Philips</td>
                                        <td>@simon</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jane</td>
                                        <td>Doe</td>
                                        <td>@jane</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah data santri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/psb/kelompok" method="POST">
            {{csrf_field()}}

            <div class="col">
                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="heading">Kelompok 1A</h3>
                            <div class="form-group row">
                                <label class="col-sm-4">Pengajar</label>
                                <input type="text" class="form-control col-sm-3">
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Steve</td>
                                        <td>Jobs</td>
                                        <td>@steve</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Simon</td>
                                        <td>Philips</td>
                                        <td>@simon</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jane</td>
                                        <td>Doe</td>
                                        <td>@jane</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->
                </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>
    <!-- End Of MODAL -->

@stop