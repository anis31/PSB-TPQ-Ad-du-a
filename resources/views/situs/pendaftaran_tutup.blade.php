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
                <h3>MOHON MAAF, PENDAFTARAN SUDAH DITUTUP</h3>
            </div>
        </div>
    </div>	
</section>
@stop

@push('scripts')
<script>
// HITUNG UMUR OTOMATIS
function calculate_age(dob) { 
    var diff_ms = Date.now() - dob.getTime();
    var age_dt = new Date(diff_ms); 
  
    return Math.abs(age_dt.getUTCFullYear() - 1970);
}

$('#tgl_lahir').change(function() {
    var tgl_lahir = $(this).val();
    var umur = calculate_age(new Date(tgl_lahir));

    $("#umur").val(umur)
    $("#umur_read").text(umur + " tahun")
 });

</script>
@endpush