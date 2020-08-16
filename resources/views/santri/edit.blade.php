@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Edit Biodata Santri</h3>
								</div>
								<div class="panel-body">
                                    <form action="/santri/{{$santri->id}}/update" method="POST">
                                        {{csrf_field()}}

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="nama">Nama lengkap</label>
                                            <input name="nama" type="text" class="form-control" id="nama" value="{{$santri->nama}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="nama_panggilan">Nama panggilan</label>
                                            <input name="nama_panggilan" type="text" class="form-control" id="nama_panggilan" value="{{$santri->nama_panggilan}}">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="tempat_lahir">Tempat lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="{{$santri->tempat_lahir}}">
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tgl_lahir">Tanggal lahir</label>
                                                <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" value="{{$santri->tgl_lahir}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="umur">Umur</label>
                                                <input hidden name="umur" type="text" id="umur">
                                                <span class="form-control col-lg-6 mb-20" id="umur_read"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="sekolah_asal">Sekolah Asal</label>
                                            <input name="sekolah_asal" type="text" class="form-control" id="sekolah_asal" value="{{$santri->sekolah_asal}}">
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="kelas">Kelas</label>
                                                <select name="kelas" id="inputKelas" class="form-control" value="{{$santri->kelas}}">
                                                    <option selected>Pilih kelas...</option>
                                                    <option value="1" @if($santri->kelas == '1') selected @endif>1</option>
                                                    <option value="2" @if($santri->kelas == '2') selected @endif>2</option>
                                                    <option value="3" @if($santri->kelas == '3') selected @endif>3</option>
                                                    <option value="4" @if($santri->kelas == '4') selected @endif>4</option>
                                                    <option value="5" @if($santri->kelas == '5') selected @endif>5</option>
                                                    <option value="6" @if($santri->kelas == '6') selected @endif>6</option>
                                                </select>
                                            </div>
                                            <div class="form-grup col-md-6">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" id="input_jenis_kelamin" class="form-control">
                                                    <option selected>pilih jenis kelamin...</option>
                                                    <option value="L" @if($santri->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                                    <option value="P" @if($santri->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" class="form-control" id="alamat" placeholder="Jl. sultant agung no. ..." rows="3">{{$santri->alamat}}</textarea>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="nama_ortu">Nama orang tua</label>
                                            <input name="nama_ortu" type="text" class="form-control" id="nama_ortu" value="{{$santri->nama_ortu}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="nomor_hp">No Hp</label>
                                            <input name="nomor_hp" type="text" class="form-control" id="nomor_hp" value="{{$santri->nomor_hp}}">
                                            </div>
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