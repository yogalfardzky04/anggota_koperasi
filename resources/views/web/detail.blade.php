@extends('layouts.basik')

@section('headhtml')

    <!-- select2 -->
    <link href="{{ asset('/template/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <!-- DATEPICKER -->
    <link href="{{ asset('/template/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/template/libs/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
    <style>
        input[type="text"]:disabled{background-color:white;}
    </style>

    <script>
        $(document).ready(function () {

        });

    </script>

@endsection

@section('content')
    <div class="padding">
        @if(session()->has('message'))
        <div class="row">
            @include('layouts.msg.pop_message')
        </div>
        @endif
        <div class="row" style="padding-bottom: 3em">
            <div class="col-md-12">
                <button type="button" id="backBtn" title="Kembali" onclick="javascript:window.location.href='{{ url('/index') }}'; return false;" class="btn btn-warning"><span style="color: White;"><i class="fa fa-arrow-left" aria-hidden="true"></i></span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $page_title; ?></h4>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $data->id ?? '' }}">

                        <div class="form-group row">
                            <div class="col-md-2">
                                <img src="{{ asset($data->image) }}" class="img-circle" style="width:200px" />
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class=" col-form-label col-md-2">Nomor Induk Anggota</label>
                            <div class="col-md-6">
                                <label class="col-form-label col-md-6">{{ $data->member_number }}</label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class=" col-form-label col-md-2">Nama Lengkap</label>
                            <div class="col-md-6">
                                <label class="col-form-label col-md-6">{{ $data->name }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class=" col-form-label col-md-2">Jenis Kelamin</label>
                            <div class="col-md-6">
                                @if($data->gender == 'male')
                                    <label class="col-form-label col-md-6">Laki-laki</label>
                                @else
                                    <label class="col-form-label col-md-6">Perempuan</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class=" col-form-label col-md-2">Status</label>
                            <div class="col-md-6">
                                @if($data->marital_status == 'married')
                                    <label class="col-form-label col-md-6">Menikah</label>
                                @else
                                    <label class="col-form-label col-md-6">Belum Menikah</label>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class=" col-form-label col-md-2">Alamat Lengkap</label>
                            <div class="col-md-6">
                                <label class="col-form-label col-md-12">{{ $data->address }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class=" col-form-label col-md-2">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <label class="col-form-label col-md-6">{{ \Carbon\Carbon::parse($data->date_of_birth)->format('d-m-Y') }}</label>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label class=" col-form-label col-md-2">Tanggal Bergabung</label>
                            <div class="col-md-6">
                                <label class="col-form-label col-md-6">{{ \Carbon\Carbon::parse($data->join_date)->format('d-m-Y') }}</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-2">Status Keanggotaan</label>
                            <div class="col-md-6">
                                @if($data->status == 1)
                                    <label class="col-form-label col-md-6">Aktif</label>
                                @else
                                    <label class="col-form-label col-md-6">Non-Aktif</label>
                                @endif
                                
                            </div>
                        </div>

                        
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footbody')
    <!-- Bootstrap Treeview -->
    <script src="{{ asset('/bower_components/bootstrap-treeview/dist/bootstrap-treeview.min.js') }}"></script>
    <!-- select2 -->
    <script src="{{ asset('/template/libs/select2/dist/js/select2.min.js') }}"></script>
    <!-- DATEPICKER -->
    <script src="{{ asset('/template/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
@endsection