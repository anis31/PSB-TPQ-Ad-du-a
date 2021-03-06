@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel col-md-12">
                        <div class="panel-heading">
                            <h3 class="panel-title">Input Data Wawancara</h3>
                        </div>
                        <div class="panel-body col-md-8">
                        <form action="/psb/insert_wawancara" method="POST">
                            {{csrf_field()}}

                            <!-- Panel Quran -->
                            <h3 class="btn-primary btn-block text-center">Form Quran</h3>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-7">Pilih Nama Pendaftar</label>
                                <div class="col-sm-5">

                                <select name="pendaftaran_id" id="pendaftaran_id" class="form-control">
                                    @foreach ($list_pendaftar as $list)
                                    <option value="{{ $list->id}}">{{ $list->nama}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-9">Apakah ananda sudah mempunyai hafalan ?</label>
                                <div class="col-sm-3">
                                <select name="hafalan" id="hafalan" class="form-control" required>
                                    <option datd-display="">pilih...</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-7 text-warning">*Jika sudah, maka isilah jumlah yang dihafal</p>
                                <div class="col-sm-5">
                                <input name="surat_dihafal" type="text" class="form-control col-sm-6 " id="jumlah_hafalan" placeholder="misal: An Nas-Ad Dhuha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'misal: An Nas-Ad Dhuha'">
                                </div>
                                <p class="col-sm-7 text-warning">*Jika belum, maka lewati</p>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-9">Apakah ananda sudah bisa membaca Al Quran ?</label>
                                <div class="col-sm-3">
                                <select name="tartil" id="tartil" class="form-control" required>
                                    <option datd-display="">pilih...</option>
                                    <option value="Sudah">Sudah</option>
                                    <option value="Belum">Belum</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-9 text-warning">*Jika sudah, maka pilih level bacaan</p>
                                <div class="col-sm-3">
                                <select name="jilid" id="jilid" class="form-control">
                                    <option datd-display="">pilih...</option>
                                    <option value="Pra TK">Pra TK</option>
                                    <option value="Jilid 1">Jilid 1</option>
                                    <option value="Jilid 2">Jilid 2</option>
                                    <option value="Jilid 3">Jilid 3</option>
                                    <option value="Jilid 4">Jilid 4</option>
                                    <option value="Jilid 5">Jilid 5</option>
                                    <option value="Jilid 6">Jilid 6</option>
                                </select>
                                </div>
                                <p class="col-sm-6 text-warning">*Jika belum, maka lewati</p>
                            </div>
                            <label class="col">Catatan :</label>
                            <p class="text-warning">*Jika ada</p>
                            <textarea name="catatan_quran" id="catatan_quran" class="form-control mb-20"
                                placeholder="misal: Ananda cedal tetapi semangat belajar, hafalannya sudah cukup banyak tetapi makroj belum sempurna dan bacaan belum lancar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'misal: Ananda cedal tetapi semangat belajar, hafalannya sudah cukup banyak tetapi makroj belum sempurna dan bacaan belum lancar'" rows="5"></textarea>
                            <br>
                            <!-- Akhir Panel Quran -->
                            <!-- Panel Kuisioner -->
                                    <h3 class="btn-primary btn-block text-center">Form Kuisioner</h3>
                                    <p class="text-info">Form kuisioner mengenai kesediaan dan komitmen serta peraturan di TPQ Ad-Du'a</p>
                                        <div class="form-group row">
                                            <label class="col-sm-9">Apakah orang tua bersedia mengikuti peraturan di TPQ Ad-Du'a ?</label>
                                            <div class="col-sm-3">
                                            <select name="ask_peraturan" id="ask_peraturan" class="form-control">
                                                <option datd-display="">pilih...</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-9">Apakah orang tua bersedia membayar infaq bulanan sesuai dengan ketentuan ?</label>
                                            <div class="col-sm-3">
                                            <select name="ask_infaq" id="ask_infaq" class="form-control">
                                                <option datd-display="">pilih...</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-9">Apakah orang tua bersedia membayar administrasi pembangunan ?</label>
                                            <div class="col-sm-3">
                                            <select name="ask_bangunan" id="ask_bangunan" class="form-control">
                                                <option datd-display="">pilih...</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-9">Apakah orang tua bersedia turut berperan aktif dalam proses pembelajaran di TPQ Ad'Dua ?</label>
                                            <div class="col-sm-3">
                                            <select name="ask_partisipasi" id="ask_partisipasi" class="form-control">
                                                <option datd-display="">pilih...</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-9">Apakah orang tua bersedia turut berpartisipasi dalam setiap agenda yang dislengggarakan TPQ Ad-Du'a ?</label>
                                            <div class="col-sm-3">
                                            <select name="ask_kegiatan" id="ask_kegiatan" class="form-control">
                                                <option datd-display="">pilih...</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <label class="col">Catatan :</label>
                                        <p class="text-warning">*Jika ada</p>
                                        <textarea name="catatan_kuisioner" id="catatan_kuisioner" class="form-control mb-20" placeholder="misal: Orang tua/wali belum siap berpartisapasi dalam mendukung proses belajar dan hadir dalam kegiatan karena sibuk bekerja" onfocus="this.placeholder = ''" onblur="this.placeholder = 'misal: Orang tua/wali belum siap berpartisapasi dalam mendukung proses belajar dan hadir dalam kegiatan karena sibuk bekerja'" rows="5"></textarea>
                                        <br>
                            <!-- Akhir Panel Kuisioner -->
                            <a href="/psb/wawancara" type="button" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop