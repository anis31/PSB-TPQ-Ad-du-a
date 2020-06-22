@extends('layouts.frontend')

@section('content')	

<!-- Overlay Banner -->
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Pendaftaran				
                </h1>	
                <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/pendaftaran"> Pendaftaran</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End Overlay Banner -->
<section class="search-course-area relative" style ="background: unset;">
    <div class="container">
        <div class="row justify-content-between mt-3 pt-3">
            <div class="col-lg-6 col-md-6 search-course-left">
                <h1>
                    Pendaftaran Santri Baru<br>
                    TPQ Ad-Du'a 2020
                </h1>
                <p>
                TPQ Ad-Du'a sejak 2018 telah menerapkan sistem belajar membaca dan menghafal Al-Qur'an dengan metode "Ummi" dan bekerjasama dengan "Ummi Foundation Surabaya".<br>
                Metode Ummi sebagai metode yang mudah, cepat namun berkualitas.<br>
                    <p>
                    Jam belajar TPQ Ad-Du'a<br>
                    Senin-Jumat<br>
                    Pukul 16.00 - 17.30 WIB<br>
                    </p>
                    
                    <p>
                    Pembagian waktu<br>
                    Senin-Kamis<br>
                    16.00-16.45 = Tahfidz<br>
                    16.45-17.30 = Tahsin<br>
                    Jum'at<br>
                    16.00-16.30 = Tahfidz<br>
                    16.30-17.30 = Pengetahuan Islam (Praktik ibadah, hadist dan do'a sehari-hari)<br>
                    </p>
                
                </p>
            </div>
            <div class="col-lg-6 col-md-6 search-course-right">
            <!-- FORM Pendaftaran -->
            <form action="/daftar" method="POST" class="align-items-top">
            {{csrf_field()}}
                <h3 class="pb-20 text-center mb-30">Formulir Pendaftaran</h3>
                <div class="form-row col-md-12"> 
                    <input name="nama" type="text" class="form-control col-lg-6 mb-20 " id="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" required="">
                    <input name="nama_panggilan" type="text" class="form-control col-lg-6 mb-20 " id="nama_panggilan" placeholder="Nama Panggilan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Panggilan'" required="">
                    <input name="tempat_lahir" type="text" class="form-control  col-lg-12 mb-20" id="tempat_lahir" placeholder="Tempat Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'" required="">
                    <label for="tgl_lahir" class="col-lg-12">Tanggal lahir</label>
                    <input name="tgl_lahir" type="date" class="form-control col-lg-6 mb-20" id="tgl_lahir" required="">
                    <input name="umur" type="text" class="form-control col-lg-6 mb-20" id="umur" placeholder="Umur" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Umur'" required="">
                    <input name="sekolah_asal" type="text" class="form-control mb-20 col-lg-12" id="sekolah_asal" placeholder="Sekolah Asal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sekolah Asal'" required="">
                    <select name="kelas" id="inputKelas" class="form-control col-lg-6 mb-20" required="">
                        <option datd-display="">Pilih kelas...</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                    </select>
                    <select name="jenis_kelamin" id="input_jenis_kelamin" class="form-control col-lg-6 mb-20" required="">
                        <option datd-display="">pilih jenis kelamin...</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <textarea name="alamat" class="form-control col-lg-12 mb-20" id="alamat" placeholder="Masukkan Alamat Jl...." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Alamat'" required="" rows="3"></textarea>
                    <input name="nama_ortu" type="text" class="form-control col-lg-6 mb-20" id="nama_ortu" placeholder="Nama Orang tua/wali" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Orang tua/wali'" required="">
                    <input name="nomor_hp" type="text" class="form-control col-lg-6 mb-20" id="nomor_hp" placeholder="No HP/WhatsApp" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No HP/WhatsApp'" required="">
                    <button type="submit" class="primary-btn text-uppercase mb-70">Daftar</button>
                </div>
            </form>
            <!-- End FORM Pendaftaran -->
            </div>
        </div>
    </div>	
</section>
@stop