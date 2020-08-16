@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
        <!-- Panel ATAS-->
        <div class="panel col-md-12">
            <div class="panel-heading">
                <h3 class="panel-title">Data Halaqoh</h3>
            </div>
            <div class="panel-body">
                <p class="demo-button">
                    <button type="button" 
                        class="btn btn-success" 
                        data-toggle="modal" 
                        data-target="#modalTambah_data_halaqoh">Tambah</button>
                        Klik untuk menambahkan halaqoh baru
                </p>
            </div>
        </div>
        <!-- Akhir Panel ATAS -->
        <!-- PANEL TABLE KELOMPOK -->
        @foreach ($halaqoh as $data)
            <div class="col-md-6">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="heading">Halaqoh {{ $data->nomor_halaqoh }}{{ $data->kode_halaqoh }}</span></h3>
                        <ul class="list-unstyled list-justify">
                            <li>Pengajar <span>{{ $data->relasi_guru['nama'] }}</span></li>
                            <li>Nomor HP <span>{{ $data->relasi_guru['no_hp'] }}</span></li>
                            <li type="button" class="btn btn-xs btn-info tambah-santri fa fa-plus-square" data-id="{{$data->id}}" data-nomor="{{$data->nomor_halaqoh}}" data-kode="{{$data->kode_halaqoh}}"></li>
                            
                        </ul>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        <?php $hitung = 1; ?>
                        @foreach ($data->relasi_santri as $santri)
                        <tr>
                            <td>{{$hitung}}</td>
                            <td>{{$santri->nama}}</td>
                            <td>
                            <button type="button" 
                                class="btn btn-xs btn-warning edit-santri lnr lnr-pencil" 
                                data-id="{{$santri->id}}"
                                data-nama="{{$santri->nama}}"
                                data-halaqoh="Halaqoh {{$data->nomor_halaqoh.''.$data->kode_halaqoh}}">
                                
                            </button>
                            </td>
                        </tr>
                        <?php
                            $hitung++;

                        ?>
                        @endforeach
                        </table>
                    </div>
                </div>
                <!-- END TABLE HOVER -->
            </div>
        @endforeach
            <!-- AKHIR PANEL TABLE KELOMPOK -->

        </div>
    </div>
</div>

<!-- MODAL Tambah Halaqoh -->
<div class="modal fade" id="modalTambah_data_halaqoh" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >Tambahkan Halaqoh</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    {{csrf_field()}}

                            <!-- TABLE HOVER -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Nama Guru</label>
                                            <div class="col-sm-6">
                                            <select class="form-control" id="pilih_guru">
                                                <option datd-display="">pilih...</option>
                                                @foreach($guru as $data)
                                                <option value="{{$data->id}}"> {{$data->nama}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Nomor Halaqoh</label>
                                            <div class="col-sm-6">
                                                <input type="text" id="nomor_halaqoh" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Kode Halaqoh</label>
                                            <div class="col-sm-6">
                                            <select class="form-control" id="kode_halaqoh">
                                             <option value="A">A</option>
                                             <option value="B">B</option>

                                            </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END TABLE HOVER -->

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btn_submit_halaqoh">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END OF MODAL Halaqoh -->

<!-- MODAL Tambah data santri -->
<div class="modal fade" id="modalTambah_data_santri" tabindex="-1" role="dialog" aria-labelledby="#modalTambah_data_santriLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="#modalTambah_data_santriLabel">Tambahkan Data Santri ke Halaqoh ini</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    {{csrf_field()}}

                            <!-- TABLE HOVER -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="heading" id="nama_kelompok">Halaqoh 1A</h3>
                                    <input hidden id="pilih_santri_halaqoh_id"/>
                                    <form>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Nama Santri</label>
                                            <div class="col-sm-6">
                                            <select class="form-control" id="pilih_santri">
                                                <option datd-display="">pilih...</option>
                                                @foreach($santri_unlisted as $santri)
                                                <option value="{{$santri->id}}" data-umur="{{$santri->umur}}" data-jk="{{$santri->jenis_kelamin}}"> {{$santri->nama}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Jenis Kelamin</label>
                                            <div class="col-sm-6">
                                                <span id="pilih_santri_jk"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6">Umur</label>
                                            <div class="col-sm-6">
                                                <span id="pilih_santri_umur"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END TABLE HOVER -->

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btn_submit_santri">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END OF MODAL Tambah data santri -->


<!-- MODAL EDIT data santri-->
<div class="modal fade" id="modalEdit_data_santri" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Pindahkan data santri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- TABLE HOVER -->
                <div class="panel">
                    <div class="panel-body">
                    <form>
                    <input hidden id="edit_id_santri"/>
                        <div class="form-group row">
                            <label class="col-sm-6">Nama Santri</label>
                            <div class="col-sm-6">
                                <span id="edit_nama_santri"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6">Halaqoh saat ini</label>
                            <div class="col-sm-6">
                                <span id="edit_nama_halaqoh"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6">Halaqoh tujuan</label>
                            <div class="col-sm-6">
                            <select class="form-control" id="pilih_halaqoh">
                                <option datd-display="">pilih...</option>
                                @foreach($halaqoh as $data)
                                <option value="{{$data->id}}" >Halaqoh {{$data->nomor_halaqoh." ".$data->kode_halaqoh}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- END TABLE HOVER -->

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" id="btn_edit_santri" class="btn btn-primary">Pindahkan</button>
            </div>
        </div>
    </div>
</div>
<!-- END of MODAL EDIT data santri-->

@stop

@push('scripts')
<script>
// ACTION SIMPAN DATA HALAQOH
$('#btn_submit_halaqoh').click(function(e) {
        e.preventDefault()

        $.ajax({
            type: 'POST',
            url: '{{url("/halaqoh/simpan")}}',
            data: {
                '_token': '{{csrf_token()}}',
                'kode_halaqoh': $('#kode_halaqoh').find(':selected').val(),
                'nomor_halaqoh': $('#nomor_halaqoh').val(),
                'guru_id': $('#pilih_guru').find(':selected').val()
            },
            success: function(response){
                alert(response);
                $('#modalTambah_data_halaqoh').modal('hide')
                location.reload();
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }

        })
    });

// DROPDOWN DATA SANTRI
    $('#pilih_santri').change(function() {
        var umur=$(this).find(':selected').data('umur')
        var jk=$(this).find(':selected').data('jk')

        $('#pilih_santri_umur').text(umur+' tahun')
        $('#pilih_santri_jk').text(jk)
    });

// GET TAMBAH DATA SANTRI
    $('.tambah-santri').click(function(e) {
        var id=$(this).data('id')
        var nomor=$(this).data('nomor')
        var kode=$(this).data('kode')

        $('#pilih_santri_halaqoh_id').val(id);
        $('#nama_kelompok').text('Halaqoh '+nomor+kode);

        $('#modalTambah_data_santri').modal('show')
    });
// ACTION SIMPAN DATA SANTRI KE HALAQOH
    $('#btn_submit_santri').click(function(e) {
        e.preventDefault()

        $.ajax({
            type: 'POST',
            url: '{{url("/halaqoh/simpan-santri")}}',
            data: {
                '_token': '{{csrf_token()}}',
                'halaqoh_id': $('#pilih_santri_halaqoh_id').val(),
                'santri_id': $('#pilih_santri').find(':selected').val()
            },
            success: function(response){
                alert(response);
                $('#modalTambah_data_santri').modal('hide')
                location.reload();
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }
            
        })
    });


// GET DATA SANTRI UNTUK DIPINDAH
    $('.edit-santri').click(function(e) {
        var id=$(this).data('id')
        var nama=$(this).data('nama')
        var halaqoh=$(this).data('halaqoh')

        $('#edit_id_santri').val(id);

        $('#edit_nama_santri').text(nama);

        $('#edit_nama_halaqoh').text(halaqoh);

        $('#modalEdit_data_santri').modal('show')
    });
// ACTION PINDAHKAN DATA SANTRI
    $('#btn_edit_santri').click(function(e) {
        e.preventDefault()

        $.ajax({
            type: 'POST',
            url: '{{url("/halaqoh/simpan-santri")}}',
            data: {
                '_token': '{{csrf_token()}}',
                'santri_id': $('#edit_id_santri').val(),
                'halaqoh_id': $('#pilih_halaqoh').find(':selected').val()
            },
            success: function(response){
                alert(response);
                $('#modalTambah_data_santri').modal('hide')
                location.reload();
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            }
            
        })
    });

</script>
@endpush