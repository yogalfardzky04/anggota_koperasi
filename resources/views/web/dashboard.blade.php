@extends('layouts.basik')

@section('headhtml')

    <!-- select2 -->
    <link href="{{ asset('/template/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <!-- DATEPICKER -->
    <link href="{{ asset('/template/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/template/libs/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
     <!-- Other head elements -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        input[type="text"]:disabled{background-color:white;}
    </style>

    

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

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Anggota - Jenis Kelamin</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="pieChartGender"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Anggota - Status Pernikahan</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="doughnutChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Anggota - Status Anggota</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="barChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('pieChartGender').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: @json($data['labels_gender']),
                datasets: [{
                    data: @json($data['data_gender']),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            },
        });

        var ctx = document.getElementById('doughnutChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($data['labels_marital_status']),
                datasets: [{
                    data: @json($data['data_marital_status']),
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                       
                    ],
                    borderWidth: 1
                }]
            },
        });

        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($data['labels_active']),
                datasets: [{
                    label: 'Data',
                    data: @json($data['data_active']),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

   </script>
@endsection

@section('footbody')
    <!-- Bootstrap Treeview -->
    <script src="{{ asset('/bower_components/bootstrap-treeview/dist/bootstrap-treeview.min.js') }}"></script>
    <!-- select2 -->
    <script src="{{ asset('/template/libs/select2/dist/js/select2.min.js') }}"></script>
    <!-- DATEPICKER -->
    <script src="{{ asset('/template/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
@endsection