@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Biodata Calon Santri Baru</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/psb/{{$profil_pendaftar->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="nama">Nama lengkap</label>
                                    <input name="nama" type="text" class="form-control" id="nama" value="{{$profil_pendaftar->nama}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="nama_panggilan">Nama panggilan</label>
                                    <input name="nama_panggilan" type="text" class="form-control" id="nama_panggilan" value="{{$profil_pendaftar->nama_panggilan}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="tempat_lahir">Tempat lahir</label>
                                    <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="{{$profil_pendaftar->tempat_lahir}}">
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tgl_lahir">Tanggal lahir</label>
                                        <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" value="{{$profil_pendaftar->tgl_lahir}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="umur">Umur</label>
                                        <input name="umur" type="text" class="form-control" id="umur" value="{{$profil_pendaftar->umur}}">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="sekolah_asal">Sekolah Asal</label>
                                    <input name="sekolah_asal" type="text" class="form-control" id="sekolah_asal" value="{{$profil_pendaftar->sekolah_asal}}">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="kelas">Kelas</label>
                                        <select name="kelas" id="inputKelas" class="form-control" value="{{$profil_pendaftar->kelas}}">
                                            <option selected>Pilih kelas...</option>
                                            <option value="1" @if($profil_pendaftar->kelas == '1') selected @endif>1</option>
                                            <option value="2" @if($profil_pendaftar->kelas == '2') selected @endif>2</option>
                                            <option value="3" @if($profil_pendaftar->kelas == '3') selected @endif>3</option>
                                            <option value="4" @if($profil_pendaftar->kelas == '4') selected @endif>4</option>
                                            <option value="5" @if($profil_pendaftar->kelas == '5') selected @endif>5</option>
                                            <option value="6" @if($profil_pendaftar->kelas == '6') selected @endif>6</option>
                                        </select>
                                    </div>
                                    <div class="form-grup col-md-6">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="input_jenis_kelamin" class="form-control">
                                            <option selected>pilih jenis kelamin...</option>
                                            <option value="L" @if($profil_pendaftar->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                            <option value="P" @if($profil_pendaftar->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Jl. sultant agung no. ..." rows="3">{{$profil_pendaftar->alamat}}</textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="nama_ortu">Nama orang tua</label>
                                    <input name="nama_ortu" type="text" class="form-control" id="nama_ortu" value="{{$profil_pendaftar->nama_ortu}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="nomor_hp">No Hp</label>
                                    <input name="nomor_hp" type="text" class="form-control" id="nomor_hp" value="{{$profil_pendaftar->nomor_hp}}">
                                    </div>
                                </div>
                                <div class="custom-file form-group col-md-12">
                                    <label for="photo">Upload Photo</label>
                                    <input type="file" class="custom-file-input form-control" name="photo" id="photo">
                                </div>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop