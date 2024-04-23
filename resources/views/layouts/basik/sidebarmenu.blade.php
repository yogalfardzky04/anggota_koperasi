<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
	<div class="sidenav h-100 modal-dialog bg-sidebarmenu">
		<!-- sidenav top -->
		<div class="navbar">
			<!-- brand -->
			<a href="{{ url('/') }}" class="navbar-brand ">
				<!-- <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
					<g class="loading-spin" style="transform-origin: 256px 256px">
						<path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
					</g>
				</svg> -->
				<!-- <img src="../assets/img/logo.png" alt="..."> -->
				{{-- <img src="{{asset('img/logo.png')}}"> --}}

				<span class="hidden-folded d-inline l-s-n-1x ">KOPERASI POHON BERINGIN</span>
			</a>
			<!-- / brand -->
		</div>
			<!-- Flex nav content -->
			<div class="flex scrollable hover">
				@php
				$access_list = empty($access_list) ? [] : $access_list;
				@endphp
				<div class="nav-active-text-primary" data-nav>
					<ul class="nav bg">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Menu</span>
						</li>
						<li>
							<a href="{{ url('/') }}">
								<span class="nav-icon text-primary"><i data-feather='home'></i></span>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="{{ url('/index') }}">
								<span class="nav-icon text-primary"><i data-feather='users'></i></span>
								<span class="nav-text">Kelola Data Anggota</span>
							</a>
						</li>
					</ul>
				</div>
				{{-- <div class="nav-active-text-primary" data-nav>
					<ul class="nav bg">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Main</span>
						</li>
						<li>
							<a href="{{ url('/') }}">
								<span class="nav-icon text-primary"><i data-feather='home'></i></span>
								<span class="nav-text">Dashboard</span>
							</a>
						</li>
					</ul>
					@php
					$list_routes = [
						'web.master.journal_template.index',
						'web.master.office.index',
						'web.master.grade.index',
						'web.master.grade.index',
						'web.master.job_position.index',
						'web.master.location.index',
						'web.master.user.index',
						'web.master.loan_budget.index',
						'web.master.loan_type.index',
						'web.master.loan_condition.index',
						'web.master.savings.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Master</span>
						</li>

						@php
						$list_routes = ['web.master.journal_template.index'];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Akuntansi</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.journal_template.index', $access_list))
								<li>
									<a href="{{ url('/master/journal_template') }}" class="">
										<span class="nav-text">Template Transaksi</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif

						@php
						$list_routes = [
							'web.master.office.index',
							'web.master.brand.index',
							'web.master.location.index',
							'web.master.grade.index',
							'web.master.job_position.index',
							'web.master.user.index',
						];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Office</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.office.index', $access_list))
								<li>
									<a href="{{ url('/master/company') }}" class="">
										<span class="nav-text">Perusahaan</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.brand.index', $access_list))
								<li>
									<a href="{{ url('/master/brand') }}" class="">
										<span class="nav-text">Brand</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.location.index', $access_list))
								<li>
									<a href="{{ url('/master/location') }}" class="">
										<span class="nav-text">Lokasi</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.grade.index', $access_list))
								<li>
									<a href="{{ url('/master/grade') }}" class="">
										<span class="nav-text">Grade</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.job_position.index', $access_list))
								<li>
									<a href="{{ url('/master/job_position') }}" class="">
										<span class="nav-text">Jabatan</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.user.index', $access_list))
								<li>
									<a href="{{ url('/master/user') }}" class="">
										<span class="nav-text">User</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif

						@php
						$list_routes = [
							'web.master.loan_budget.index',
							'web.master.loan_type.index',
							'web.master.savings.index',
						];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Layanan</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.loan_budget.index', $access_list))
								<li>
									<a href="{{ url('/master/loan_budget') }}" class="">
										<span class="nav-text">Budget Pinjaman</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.loan_type.index', $access_list))
								<li>
									<a href="{{ url('/master/loan_master') }}" class="">
										<span class="nav-text">Master Pinjaman</span>
									</a>
								</li>
								@endif
								@if(in_array('web.master.savings.index', $access_list))
								<li>
									<a href="{{ url('/master/saving') }}" class="">
										<span class="nav-text">Master Simpanan</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif

						@php
						$list_routes = [
							'web.master.transaction.index',
						];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Transaksi</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.transaction.index', $access_list))
								<li>
									<a href="{{ url('/master/transaction') }}" class="">
										<span class="nav-text">Transaksi</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif

						@php
						$list_routes = ['web.master.uac.index'];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">UAC</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.uac.index', $access_list))
								<li>
									<a href="{{ url('/master/uac') }}" class="">
										<span class="nav-text">UAC</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif
					</ul>
					@endif

					@php
					$list_routes = [
						'web.master.mail.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Broadcast</span>
						</li>
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Surat</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.master.mail.index', $access_list))
								<li>
									<a href="{{ url('/admin/mail/master') }}" class="">
										<span class="nav-text">Kirim Pesan</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
					</ul>
					@endif

					@php
					$list_routes = [
						'web.mail.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Pemberitahuan</span>
						</li>
						@if(in_array('web.mail.index', $access_list))
						<li>
							<a href="{{ url('/mail') }}" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Pesan</span>
							</a>
						</li>
						@endif
					</ul>
					@endif

					@php
					$list_routes = [
						'web.accounting.journal.index',
						'web.accounting.general_ledger.index',
						'web.accounting.balance_sheet.index',
						'web.accounting.profit_and_loss.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Akuntansi</span>
						</li>
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Laporan</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.accounting.journal.index', $access_list))
								<li>
									<a href="{{ url('/accounting/report/journal') }}" class="">
										<span class="nav-text">Jurnal Umum</span>
									</a>
								</li>
								@endif
								@if(in_array('web.accounting.general_ledger.index', $access_list))
								<li>
									<a href="{{ url('/accounting/report/general_ledger') }}" class="">
										<span class="nav-text">Buku Besar</span>
									</a>
								</li>
								@endif
								@if(in_array('web.accounting.balance_sheet.index', $access_list))
								<li>
									<a href="{{ url('/accounting/report/balance_sheet') }}" class="">
										<span class="nav-text">Neraca Saldo</span>
									</a>
								</li>
								@endif
								@if(in_array('web.accounting.profit_and_loss.index', $access_list))
								<li>
									<a href="{{ url('/accounting/report/profit_loss') }}" class="">
										<span class="nav-text">Neraca Laba Rugi</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
					</ul>
					@endif

					@php
					$list_routes = [
						'web.transaction.loan.loan_application.index',
						'web.transaction.loan.loan_application.simulation',
						'web.transaction.saving.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Layanan</span>
						</li>
						@php
						$list_routes = [
							'web.transaction.loan.loan_application.index',
							'web.transaction.loan.loan_application.simulation',
						];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Pinjaman</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.transaction.loan.loan_application.index', $access_list))
								<li>
									<a href="{{ url('/loan') }}" class="">
										<span class="nav-text">Pengajuan Pinjaman</span>
									</a>
								</li>
								@endif
								@if(in_array('web.transaction.loan.loan_application.simulation', $access_list))
								<li>
									<a href="{{ url('/loan/simulation') }}" class="">
										<span class="nav-text">Simulasi Pinjaman</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif
						@php
						$list_routes = [
							'web.transaction.saving.index',
						];
						@endphp
						@if(count(array_intersect($access_list, $list_routes)) > 0)
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Simpanan</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.transaction.saving.index', $access_list))
								<li>
									<a href="{{ url('/saving') }}" class="">
										<span class="nav-text">Rekening</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
						@endif
					</ul>
					@endif

					@php
					$list_routes = [
						'web.transaction.loan.approval.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Proses</span>
						</li>
						@if(in_array('web.transaction.loan.approval.index', $access_list))
						<li>
							<a href="{{url('approval/loan')}}" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Persetujuan Pinjaman</span>
							</a>
						</li>
						@endif
					</ul>
					@endif

					@php
					$list_routes = [
						'web.transaction.bca.index',
						'web.transaction.expense.index',
						'web.transaction.loan.ongoing_loan.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Transaksi</span>
						</li>
						@if(in_array('web.transaction.bca.index', $access_list))
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Download</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								<li>
									<a href="{{ url('banking/bca') }}" class="">
										<span class="nav-text">BCA Batch</span>
									</a>
								</li>
							</ul>
						</li>
						@endif
						@if(in_array('web.transaction.expense.index', $access_list))
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Upload</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								<li>
									<a href="{{ url('transaction_batch') }}" class="">
										<span class="nav-text">Bundel Transaksi</span>
									</a>
								</li>
							</ul>
						</li>
						@endif
						@if(in_array('web.transaction.loan.ongoing_loan.index', $access_list))
						<li>
							<a href="{{url('loan/ongoing_loan')}}" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Pinjaman Berjalan & Pembayaran</span>
							</a>
						</li>
						@endif
					</ul>
					@endif

					@php
					$list_routes = [
						'web.report.saving.index',
						'web.report.loan.index',
					];
					@endphp
					@if(count(array_intersect($access_list, $list_routes)) > 0)
					<ul class="nav ">
						<li class="nav-header hidden-folded">
							<span class="text-muted">Laporan</span>
						</li>
						<li>
							<a href="#" class="">
								<span class="nav-icon"><i data-feather='grid'></i></span>
								<span class="nav-text">Transaksi</span>
								<span class="nav-caret"></span>
							</a>
							<ul class="nav-sub nav-mega">
								@if(in_array('web.report.saving.index', $access_list))
								<li>
									<a href="{{ url('/report/saving') }}" class="">
										<span class="nav-text">Simpanan</span>
									</a>
								</li>
								@endif
								@if(in_array('web.report.loan.index', $access_list))
								<li>
									<a href="{{ url('/report/loan') }}" class="">
										<span class="nav-text">Pinjaman</span>
									</a>
								</li>
								@endif
							</ul>
						</li>
					</ul>
					@endif

				</div> --}}
			</div>
			<!-- sidenav bottom -->
		</div>
	</div>