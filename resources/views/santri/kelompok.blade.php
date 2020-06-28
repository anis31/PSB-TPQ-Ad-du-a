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
                                <li type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalTambah_data_santri">Tambah</li>
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
                
                <!-- Extra large modal / Modal paling besar-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalPalingBesar">Extra large modal</button>

                <div class="modal fade modalPalingBesar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5>Modal extra large (xl)</h5>
                    </div>
                    <div class="modal-body">
                        Contoh modal berukuran paling besar.
                    </div>
                    </div>

                </div>
                </div>

                <!-- Large modal / Modal besar-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalBesar">Large modal</button>

                <div class="modal fade modalBesar" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                    <div class="modal-header">
                        <h5>Modal large (lg)</h5>
                    </div>
                    <div class="modal-body">
                        Contoh modal berukuran sedang.
                    </div>
                    </div>

                </div>
                </div>

                <!-- Small modal / Modal kecil-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modalKecil">Small modal</button>

                <div class="modal fade modalKecil" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                    <div class="modal-header">
                        <h5>Modal small / kecil (sm)</h5>
                    </div>
                    <div class="modal-body">
                        Contoh modal berukuran paling kecil.
                    </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL Tambah data santri -->
    <div class="modal fade" id="modalTambah_data_santri" tabindex="-1" role="dialog" aria-labelledby="#modalTambah_data_santriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="#modalTambah_data_santriLabel">Tambahkan Data Santri ke Kelompok ini</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="#" method="POST">
            {{csrf_field()}}

                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="heading">Kelompok 1A</h3>
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-6">Nama Santri</label>
                                    <div class="col-sm-6">
                                    <select class="form-control">
                                        <option datd-display="">pilih...</option>
                                        <option value="Ya">Sulaiman</option>
                                        <option value="Ya">Yusuf</option>
                                        <option value="Ya">Maryam</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Autoselect L/P">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6">Umur</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Autoselect 081111">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>
    <!-- END OF MODAL Tambah data santri -->

    <!-- MODAL Edit Data Santri -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Edit Data Kelompok</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/psb/kelompok" method="POST">
            {{csrf_field()}}

                    <!-- TABLE HOVER -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="heading">Kelompok 1A</h3>
                            <form>
                                <div class="form-group row">
                                    <label class="col-sm-6">Pengajar</label>
                                    <div class="col-sm-6">
                                    <select class="form-control">
                                        <option datd-display="">pilih...</option>
                                        <option value="Ya">Ustadz Abdullah</option>
                                        <option value="Ya">Ustadz Abu Bakar</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-6">Nomor HP</label>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Autoselect 081111">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Santri</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Steve</td>
                                        <td>Jobs</td>
                                        <td>@steve</td>
                                        <td><a href="#" class="btn btn-danger btn-sm" onclick=" return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Simon</td>
                                        <td>Philips</td>
                                        <td>@simon</td>
                                        <td><a href="#" class="btn btn-danger btn-sm" onclick=" return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jane</td>
                                        <td>Doe</td>
                                        <td>@jane</td>
                                        <td><a href="#" class="btn btn-danger btn-sm" onclick=" return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE HOVER -->

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>
    <!-- End Of MODAL Edit Data Santri-->

@stop