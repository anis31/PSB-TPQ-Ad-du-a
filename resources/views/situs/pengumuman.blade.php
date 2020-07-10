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
                                <div class="table-row">
                                    <div class="serial">01</div>
                                    <div class="country">Bayu Pratama</div>
                                    <div class="country">Bayu</div>
                                    <div class="visit">L</div>
                                    <div class="visit">12</div>
                                    <div class="country">SD 2 Sukamaju</div>
                                    <div class="country">6</div>
                                    <div class="country">Susilo Budi</div>
                                    
                                </div>
                                <div class="table-row">
                                    <div class="serial">02</div>
                                    <div class="country">Laila Sulastri</div>
                                    <div class="country">Lastri</div>
                                    <div class="visit">P</div>
                                    <div class="visit">10</div>
                                    <div class="country">SD 4 Kota Baru</div>
                                    <div class="country">5</div>
                                    <div class="country">Warngonegoro</div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table Cotent -->
@stop