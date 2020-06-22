@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">Data Santri</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                    
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Panggilan</th>
                                                <th>Umur</th>
                                                <th>Sekolah Asal</th>
                                                <th>Kelas</th>
                                                <th>L/P</th>
                                                <th>Nama Orang Tua</th>
                                                <th>Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach ($data_santri as $santri)
                                        <tr>
                                            <td><a href="/santri/{{$santri->id}}/profil">{{$santri->nama}}</a></td>
                                            <td><a href="/santri/{{$santri->id}}/profil">{{$santri->nama_panggilan}}</a></td>
                                            <td>{{$santri->umur}}</td>
                                            <td>{{$santri->sekolah_asal}}</td>
                                            <td>{{$santri->kelas}}</td>
                                            <td>{{$santri->jenis_kelamin}}</td>
                                            <td>{{$santri->nama_ortu}}</td>
                                            <td>
                                                <a href="/santri/{{$santri->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/santri/{{$santri->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah data santri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="/santri/tambah" method="POST">
            {{csrf_field()}}

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama">Nama lengkap</label>
                <input name="nama" type="text" class="form-control" id="nama">
                </div>
                <div class="form-group col-md-6">
                <label for="nama_panggilan">Nama panggilan</label>
                <input name="nama_panggilan" type="text" class="form-control" id="nama_panggilan">
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="tempat_lahir">Tempat lahir</label>
                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir">
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tgl_lahir">Tanggal lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir">
                </div>
                <div class="form-group col-md-6">
                    <label for="umur">Umur</label>
                    <input name="umur" type="text" class="form-control" id="umur">
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="sekolah_asal">Sekolah Asal</label>
                <input name="sekolah_asal" type="text" class="form-control" id="sekolah_asal">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="inputKelas" class="form-control">
                        <option selected>Pilih kelas...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                </div>
                <div class="form-grup col-md-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="input_jenis_kelamin" class="form-control">
                        <option selected>pilih jenis kelamin...</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="form-group col-md-12">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Jl. sultant agung no. ..." rows="3"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama_ortu">Nama orang tua</label>
                <input name="nama_ortu" type="text" class="form-control" id="nama_ortu">
                </div>
                <div class="form-group col-md-6">
                <label for="nomor_hp">No Hp</label>
                <input name="nomor_hp" type="text" class="form-control" id="nomor_hp">
                </div>
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        </div>
        </div>
    </div>

@stop

