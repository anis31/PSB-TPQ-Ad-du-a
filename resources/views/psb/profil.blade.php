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
                            <div class="text-center"><a href="#" class="btn btn-primary">Edit Profil</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        <h3>Form Wawancara</h3>
								<!-- AWARDS -->
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab" aria-expanded="false">Quran</a></li>
										<li class=""><a href="#tab-bottom-left2" role="tab" data-toggle="tab" aria-expanded="true">Wawancara</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
                                    <form>
										<div class="form-group row">
											<label class="col-sm-9">Apakah ananda sudah mempunyai hafalan ?</label>
											<div class="col-sm-3">
											<select class="form-control">
												<option datd-display="">pilih...</option>
												<option value="sudah">Sudah</option>
												<option value="belum">Belum</option>
											</select>
											</div>
										</div>
										<div class="form-group row">
											<p class="col-sm-6 text-warning">*Jika sudah, maka isilah jumlah yang dihafal</p>
											<div class="col-sm-6">
											<input name="jumlah_hafalan" type="text" class="form-control col-sm-6 " id="jumlah_hafalan" placeholder="misal: An Nas-Ad Dhuha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'misal: An Nas-Ad Dhuha'" required="">
											</div>
											<p class="col-sm-6 text-warning">*Jika belum, maka lewati</p>
										</div>
										<div class="form-group row">
											<label class="col-sm-9">Apakah ananda sudah bisa membaca Al Quran ?</label>
											<div class="col-sm-3">
											<select class="form-control">
												<option datd-display="">pilih...</option>
												<option value="sudah">Sudah</option>
												<option value="belum">Belum</option>
											</select>
											</div>
										</div>
										<div class="form-group row">
											<p class="col-sm-9 text-warning">*Jika sudah, maka pilih level bacaan</p>
											<div class="col-sm-3">
											<select class="form-control">
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
										<textarea class="form-control"
											placeholder="misal: Ananda cedal tetapi semangat belajar, hafalannya sudah cukup banyak tetapi makroj belum sempurna dan bacaan belum lancar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'misal: Ananda cedal tetapi semangat belajar, hafalannya sudah cukup banyak tetapi makroj belum sempurna dan bacaan belum lancar'" required="" rows="5"></textarea>
									</form>
									</div>
									<div class="tab-pane fade" id="tab-bottom-left2">
										<div class="table-responsive">
											<table class="table project-table">
												<thead>
													<tr>
														<th>Title</th>
														<th>Progress</th>
														<th>Leader</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Spot Media</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																	<span>60% Complete</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
													<tr>
														<td><a href="#">E-Commerce Site</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
																	<span>33% Complete</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
														<td><span class="label label-warning">PENDING</span></td>
													</tr>
													<tr>
														<td><a href="#">Project 123GO</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
																	<span>68% Complete</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
													<tr>
														<td><a href="#">Wordpress Theme</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
																	<span>75%</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
													<tr>
														<td><a href="#">Project 123GO</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																	<span>100%</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
														<td><span class="label label-default">CLOSED</span></td>
													</tr>
													<tr>
														<td><a href="#">Redesign Landing Page</a></td>
														<td>
															<div class="progress">
																<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																	<span>100%</span>
																</div>
															</div>
														</td>
														<td><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle"> <a href="#">Jason</a></td>
														<td><span class="label label-default">CLOSED</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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