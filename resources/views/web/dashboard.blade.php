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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $page_title; ?></h4>
                    </div>
                    <div class="card-body">
                        Selamat Datang ADMIN !
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