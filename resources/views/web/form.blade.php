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
        <form method="post" action="{{ url('/save') }}" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4><?php echo $page_title; ?></h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id">

                            <div class="form-group row">
                                <label for="name" class=" col-form-label col-md-2">Nomor Induk Anggota</label>
                                <div class="col-md-6">
                                    <input type="text" name="member_number" id="name" class="form-control" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="name" class=" col-form-label col-md-2">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" class="form-control" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class=" col-form-label col-md-2">Jenis Kelamin</label>
                                <div class="col-md-6">
                                    <select name="gender"
                                        class="form-control">
                                        <option value=""></option>
                                        <option value="male">Laki-laki</option>
                                        <option value="female">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class=" col-form-label col-md-2">Status</label>
                                <div class="col-md-6">
                                    <select name="marital_status"
                                        class="form-control">
                                        <option value=""></option>
                                        <option value="married">Menikah</option>
                                        <option value="single">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class=" col-form-label col-md-2">Alamat Lengkap</label>
                                <div class="col-md-6">
                                    <textarea name="address" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class=" col-form-label col-md-2">Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <input type="date" name="date_of_birth" class="form-control date"
                                    required >
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class=" col-form-label col-md-2">Tanggal Bergabung</label>
                                <div class="col-md-6">
                                    <input type="date" name="join_date" class="form-control date"
                                    required >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Status Keanggotaan</label>
                                <div class="col-md-6">
                                    <select name="status"
                                        class="form-control">
                                        <option value=""></option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Non-Aktif</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Upload Foto</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" name="image" id="formFile" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submitBtn" class="btn btn-info" ><span style="color: White;"><i class="fa fa-save" aria-hidden="true"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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