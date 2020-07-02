@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
                                <h3 class="name">{{$data_wawancara->relasi_daftar['nama']}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        Umur <span>{{$data_wawancara->relasi_daftar['umur']}} th</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        Orang Tua <span>{{$data_wawancara->relasi_daftar['nama_ortu']}}</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        No. HP <span>{{$data_wawancara->relasi_daftar['nomor_hp']}}</span>
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
                                    <li>Tempat Lahir <span>{{$data_wawancara->relasi_daftar['tempat_lahir']}}</span></li>
                                    <li>Tanggal Lahir <span>{{$data_wawancara->relasi_daftar['tgl_lahir']}}</span></li>
                                    <li>Umur <span>{{$data_wawancara->relasi_daftar['umur']}} tahun</span></li>
                                    <li>Jenis Kelamin <span>{{$data_wawancara->relasi_daftar['jenis_kelamin']}}</span></li>
                                    <li>Nama Orang Tua <span>{{$data_wawancara->relasi_daftar['nama_ortu']}}</span></li>
                                    <li>No. HP <span>{{$data_wawancara->relasi_daftar['nomor_hp']}}</span></li>
                                    <li>Sekolah Asal <span>{{$data_wawancara->relasi_daftar['sekolah_asal']}}</span></li>
                                    <li>Kelas <span>{{$data_wawancara->relasi_daftar['kelas']}}</span></li>
                                    <li>Alamat <span>{{$data_wawancara->relasi_daftar['alamat']}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <h3>Form Wawancara</h3>
								<!-- AWARDS -->
								<!-- END AWARDS -->
								<!-- Tab menu Panel -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab" aria-expanded="false">Quran</a></li>
										<li class=""><a href="#tab-bottom-left2" role="tab" data-toggle="tab" aria-expanded="true">Kuisioner</a></li>
									</ul>
								</div>
								<!-- Akhir Tab menu Panel -->
								<div class="tab-content">
								    <!-- Panel 1 -->
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<form action="">
											<div class="form-group row">
												<label class="col-sm-9">Apakah ananda sudah mempunyai hafalan ?</label>
												<div class="col-sm-3">
													<input name="hafalan" type="text" class="form-control col-sm-3 " id="hafalan" value="{{$data_wawancara->hafalan}}" disabled>
												</div>
                                            </div>
                                            <div class="form-group row">
                                                <p class="col-sm-6 text-warning">*Jika sudah, maka isilah jumlah yang dihafal</p>
                                                <div class="col-sm-6">
                                                <input name="surat_dihafal" type="text" class="form-control col-sm-6 " id="surat_dihafal" value="{{$data_wawancara->surat_dihafal}}" disabled>
                                                </div>
                                                <p class="col-sm-6 text-warning">*Jika belum, maka lewati</p>
                                            </div>
                                            <div class="form-group row">
												<label class="col-sm-9">Apakah ananda sudah bisa membaca Al Quran ?</label>
												<div class="col-sm-3">
													<input name="tartil" type="text" class="form-control col-sm-6 " id="tartil" value="{{$data_wawancara->tartil}}" disabled>
												</div>
											</div>
                                            <div class="form-group row">
												<p class="col-sm-9 text-warning">*Jika sudah, maka pilih level bacaan</p>
												<div class="col-sm-3">
													<input name="jilid" type="text" class="form-control col-sm-6 " id="jilid" value="{{$data_wawancara->jilid}}" disabled>
												</div>
												<p class="col-sm-6 text-warning">*Jika belum, maka lewati</p>
											</div>
											<label class="col">Catatan :</label>
											<p class="text-warning">*Jika ada</p>
											<textarea class="form-control mb-20" name="catatan_quran" id="catatan_quran"
												placeholder="{{$data_wawancara->catatan_quran}}" rows="5" disabled></textarea>
											<br>
										</form>
                                    </div>
									<!-- End of Panel 1 -->
									<!-- Panel 2 -->
									<div class="tab-pane fade" id="tab-bottom-left2">
											<form>
												<div class="form-group row">
												<p class="text-info col-sm-12">Form kuisioner mengenai kesediaan dan komitmen orang tua/wali terhadap peraturan di TPQ Ad-Du'a</p>
													<label class="col-sm-9">Apakah orang tua bersedia mengikuti peraturan di TPQ Ad-Du'a ?</label>
													<div class="col-sm-3">
													    <input name="ask_peraturan" type="text" class="form-control col-sm-3 " id="ask_peraturan" value="{{$data_wawancara->ask_peraturan}}" disabled>
													</div>
												</div>
												<div class="form-group row">
												<label class="col-sm-9">Apakah orang tua bersedia membayar infaq bulanan sesuai dengan ketentuan ?</label>
													<div class="col-sm-3">
													    <input name="ask_infaq" type="text" class="form-control col-sm-3 " id="ask_infaq" value="{{$data_wawancara->ask_infaq}}" disabled>
													</div>
												</div>
												<div class="form-group row">
												<label class="col-sm-9">Apakah orang tua bersedia membayar administrasi pembangunan ?</label>
													<div class="col-sm-3">
													    <input name="ask_bangunan" type="text" class="form-control col-sm-3 " id="ask_bangunan" value="{{$data_wawancara->ask_bangunan}}" disabled>
													</div>
												</div>
												<div class="form-group row">
												<label class="col-sm-9">Apakah orang tua bersedia turut berperan aktif dalam proses pembelajaran di TPQ Ad'Dua ?</label>
													<div class="col-sm-3">
													    <input name="ask_partisipasi" type="text" class="form-control col-sm-3 " id="ask_partisipasi" value="{{$data_wawancara->ask_partisipasi}}" disabled>
													</div>
												</div>
												<div class="form-group row">
												<label class="col-sm-9">Apakah orang tua bersedia turut berpartisipasi dalam setiap agenda yang dislengggarakan TPQ Ad-Du'a ?</label>
													<div class="col-sm-3">
													    <input name="ask_kegiatan" type="text" class="form-control col-sm-3 " id="ask_kegiatan" value="{{$data_wawancara->ask_kegiatan}}" disabled>
													</div>
												</div>
												<label class="col">Catatan :</label>
                                                <p class="text-warning">*Jika ada</p>
                                                <textarea class="form-control mb-20" name="catatan_kuisioner" id="catatan_kuisioner"
                                                    placeholder="{{$data_wawancara->catatan_kuisioner}}" rows="5" disabled></textarea>
                                                <br>
											</form>
									</div>
                                    <!-- End of Panel 2 -->
								</div>
								<!-- END TABBED CONTENT -->
							</div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@stop()