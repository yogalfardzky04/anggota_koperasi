@extends('layouts.basik')

@section('headhtml')
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('/template/libs/font-awesome/css/font-awesome.min.css') }}" type="text/css" />
	<!-- select2 -->
	<link href="{{ asset('/template/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/template/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />


	<style>
		.modal-dialog{
			position: relative;
			display: table; /* This is important */ 
			overflow-y: auto;    
			overflow-x: auto;
			width: auto;
			min-width: 300px;   
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#anggota-table').DataTable({
				pageLength: 25,
				filter: true
			});
		});

	</script>
@endsection


@section('content')
    <div class="padding">
        <div class="row">
            @if(session()->has('message'))
                @include('layouts.msg.pop_message')
            @endif

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><?php echo $page_title; ?></h4>
                    </div>
                    <div class="card-body">
                        <div id="quartal-text" style="padding-bottom: 8px;">
                            <button id="addBtn" onclick="location.href='{{ url('/form') }}'" class="btn btn-success btn-sm" title="Add Data"><i class="fa fa-plus fa-sm"></i></button>
                        </div>
                        <table id="anggota-table" class="table table-theme table-row v-middle" data-plugin="dataTable">
                            <thead>
                                <tr>
                                    <th><span class="text-muted">No</span></th>
                                    <th><span class="text-muted">Nomor Induk Anggota</span></th>
                                    <th><span class="text-muted">Nama</span></th>
                                    <th><span class="text-muted">Gender</span></th>
                                    <th><span class="text-muted">Tanggal Bergabung</span></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($data as $d): ?>
                                <tr>
                                    <td style="min-width:30px;text-align:center">{{ $i++ }}</td>
                                    <td style="flex">{{ $d->member_number }}</td>
                                    <td class="flex">{{ $d->name }}</td>
                                    <td class="flex">
                                        @if($d->gender == 'male')
                                            Laki-laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                    <td class="flex">{{ \Carbon\Carbon::parse($d->join_date)->format('d-m-Y') }}</td>
                                    <td class="flex">
                                        @if($d->status == 1)
                                            <span class='badge bg-success'>Aktif</span>
                                        @else
                                            <span class='badge bg-danger'>Non-Aktif</span>
                                        @endif
                                    </td>
                                  
                                    <td class="flex"></td>
                                    <td>
                                        <div class="item-action dropdown">
                                            <a href="#" data-toggle="dropdown" class="text-muted">
                                                <i class="fa fa-ellipsis-v fa-sm"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                                <a class="dropdown-item" href="{{url('/form')}}/{{$d->id}}">
                                                    Detail
                                                </a>
                                                <a class="dropdown-item" href="{{url('/form/edit')}}/{{$d->id}}">
                                                    Ubah
                                                </a>
                                                <a class="dropdown-item" href="{{url('/form/delete')}}/{{$d->id}}">
                                                    Hapus
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('footbody')

    <!-- select2 -->
    <script src="{{ asset('/template/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('/template/libs/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/template/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
@endsection