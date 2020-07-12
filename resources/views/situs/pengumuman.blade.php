@extends('layouts.frontend')

@section('content')	  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Pengumuman
                                <br>
                                Hasil Penerimaan Santri Baru				
							</h1>	
							<p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pengumuman"> Pengumuman</a></p>
						</div>	
					</div>
				</div>
			</section>

            <!-- Table Cotent -->
            <section class="table-pengumuman whole-wrap">
                <div class="container">
                    <div class="section-top-border">
                        <h3 class="mb-30">Daftar Santri Yang Diterima</h3>
                        <p><i>Barakallah</i> kepada nama-nama dibawah ini telah diterima sebagai santri TPQ Ad-Du'a dan dapat mengikuti proses pembelajaran pada semester ganjil tahun ajaran 2020-2021. <br> Untuk selanjutnya silahkan melakukan daftar ulang ke kantor TPQ Ad-Du'a pada jam kerja.</p>
                        <p>Senin-Jum'at Pukul 15.30-17.30</p>
                        <p><i>Jazkumullah khoir</i></p>
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                <div class="table-head">
                                    <div class="serial">No</div>
                                    <div class="country">Nama Lengkap</div>
                                    <div class="country">Nama Panggilan</div>
                                    <div class="visit">L/P</div>
                                    <div class="visit">Umur</div>
                                    <div class="country">Sekolah Asal</div>
                                    <div class="country">Kelas</div>
                                    <div class="country">Nama Orang Tua</div>
                                </div>
                                @foreach ($data_santri as $santri => $hasil)
                                <div class="table-row">
                                    <div class="serial">{{ $santri + $data_santri ->firstitem() }}</div>
                                    <div class="country">{{$hasil->nama}}</div>
                                    <div class="country">{{$hasil->nama_panggilan}}</div>
                                    <div class="visit">{{$hasil->jenis_kelamin}}</div>
                                    <div class="visit">{{$hasil->umur}}</div>
                                    <div class="country">{{$hasil->sekolah_asal}}</div>
                                    <div class="country">{{$hasil->kelas}}</div>
                                    <div class="country">{{$hasil->nama_ortu}}</div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Cotent -->
@stop