@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- Alert -->
            @if(Session::has('sukses'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{ Session::get('sukses') }}
                </div>
            @endif
            <!-- End Of Alert -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body">
                            <h3>Laporan Pendaftaran</h3>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Pilih Periode Pendaftaran</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <select name="periode" id="periode" class="form-control">
                                        <option selected="" value="">pilih periode...</option>
                                        @foreach($years as $year)
                                        <option value="{{$year}}" {{ request()->periode==$year? 'selected' : '' }}>{{$year}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- TABLE DATA PENDAFTAR -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Umur</th>
                                        <th>Sekolah Asal</th>
                                        <th>Kelas</th>
                                        <th>L/P</th>
                                        <th>Nama Orang Tua</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data_pendaftaran as $daftar => $hasil)
                                <tr>
                                    <td>{{ $daftar + $data_pendaftaran->firstitem() }}</td>
                                    <td><a href="/psb/{{$hasil->id}}/profil">{{$hasil->nama}}</a></td>
                                    <td><a href="/psb/{{$hasil->id}}/profil">{{$hasil->nama_panggilan}}</a></td>
                                    <td>{{$hasil->umur}}</td>
                                    <td>{{$hasil->sekolah_asal}}</td>
                                    <td>{{$hasil->kelas}}</td>
                                    <td>{{$hasil->jenis_kelamin}}</td>
                                    <td>{{$hasil->nama_ortu}}</td>
                                    <td>{{$hasil->status}}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $data_pendaftaran->links() }}
                            <!-- END OF TABLE DATA PENDAFTAR -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@stop

@push('scripts')
<script>
// DROPDOWN DATA SANTRI
    $('#periode').change(function() {
        var periode= $(this).val()

        if(periode) {
            var url = "{{url('/laporan') }}";    
            if (url.indexOf('?') > -1){
                url += '&periode='+periode
            }else{
                url += '?periode='+periode
            }
            window.location.href = url;
        }
    });
</script>
@endpush