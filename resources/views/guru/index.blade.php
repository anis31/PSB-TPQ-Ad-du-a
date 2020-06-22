@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Guru</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                    
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nama Lengkap</th>
                                                <th>Umur</th>
                                                <th>L/P</th>
                                                <th>Tahfizh</th>
                                                <th>Tartil</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach ($data_guru as $guru)
                                        <tr>
                                            <td>{{$guru->nama}}</td>
                                            <td>{{$guru->umur}}</td>
                                            <td>{{$guru->jenis_kelamin}}</td>
                                            <td>{{$guru->tahfidz}}</td>
                                            <td>{{$guru->tartil}}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                            </td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah data guru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/guru/tambah" method="POST">
            {{csrf_field()}}
            
            <div class="form-grup col-md-12">
                <label for="nama">Nama Lengkap</label>
                <input name="nama" type="text" class='form-control' id="nama">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="umur">Umur</label>
                <input name="umur" type="text" class="form-control" id="umur">
                </div>
                <div class="form-group col-md-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="input_jenis_kelamin" class="form-control">
                        <option selected>pilih jenis kelamin...</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="tahfidz">Tahfidz</label>
                <input name="tahfidz" type="text" class="form-control" id="tahfidz">
                </div>
                <div class="form-group col-md-6">
                <label for="tartil">Tartil</label>
                    <select name="tartil" id="input_tartil" class="form-control">
                        <option selected>pilih hasil tashih...</option>
                        <option value="Jilid 1">Jilid 1</option>
                        <option value="Jilid 2">Jilid 2</option>
                        <option value="Jilid 3">Jilid 3</option>
                        <option value="Jilid 4">Jilid 4</option>
                        <option value="Jilid 5">Jilid 5</option>
                        <option value="Jilid 6">Jilid 6</option>
                        <option value="Lulus Tashih">Lulus Tashih</option>
                    </select>
                </div>
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>

@stop

