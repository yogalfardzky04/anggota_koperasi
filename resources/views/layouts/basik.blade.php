<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>{{ env('APP_NAME', '') }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="KOPBBB">
	<meta name="author" content="">

	<!-- style -->
	<link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
	<link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('favicon/favicon.ico') }}">
	<link rel="icon" type="image/png" sizes="196x196" href="{{ asset('favicon/favicon-192.png') }}">
	<link rel="icon" type="image/png" sizes="160x160" href="{{ asset('favicon/favicon-160.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96.png') }}">
	<link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicon/favicon-64.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('favicon/favicon-57.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/favicon-114.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/favicon-72.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/favicon-144.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/favicon-60.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/favicon-120.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/favicon-76.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/favicon-152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/favicon-180.png') }}">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="{{ asset('favicon/favicon-144.png') }}">
	<meta name="msapplication-config" content="{{ asset('favicon/browserconfig.xml') }}">
	<link rel="stylesheet" href="{{ asset('/template/assets/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/template/assets/css/theme.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/template/assets/css/style.css') }}" type="text/css" />
	

	<style>
		.bg-sidebarmenu {
			background: white;
			background-image: url("{{ asset('img/bg-sidebar.png') }}");
			background-size: cover;
			background-position: center center;
		}

		.pic {
			/* background: no-repeat url("https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=1.00xw:0.669xh;0,0.190xh&resize=640:*"); */
			width: 200px;
			background-size: cover;
			background-position: 60% 10%;
			height: 200px;
			border: 2px solid red;
			border-radius: 200px;
		}

		.bg-content {background-color: rgba(135, 206, 235, 0.2);}

		.bg-header {background-color: rgba(170, 218, 255, 1);}

		.card {
			border-style: solid;
			border-width: 1px;
			border-color: silver;
		}
		.card-photo {
			border-style: none;
		}
		.card-header{background-color: rgba(170, 218, 255, 0.75);}

		.nav-text{color: black;}

		.nav-icon{color: black;}

		.nav-caret{color: black;}

		.nav-header{color: black; font-weight: bold;}

		.nav-sub > li :hover{background-color: rgba(0,255,0, 0.4);}

		/* .page-sidenav {
			width: 100% !important;
			height: 100% !important;
			top: 0 !important;
			position: fixed;
			z-index: 1050 !important;
			display: none;
		}
		.bg-dark .page-sidenav, .page-sidenav {
			background: transparent !important;
		}
		.page-sidenav > * {
			position: fixed;
			height: 100%;
			transition: 0.2s cubic-bezier(0.25, 0.8, 0.25, 1);
			transform: translate3d(-100%, 0, 0);
			width: 17.5rem;
		}
		.page-sidenav.show > div {
			transform: translate3d(0, 0, 0);
		} */
	</style>

	<!-- jQuery -->
	<script src="{{ asset('/template/libs/jquery/dist/jquery.min.js') }}"></script>
	@yield('headhtml')
</head>
<body class="layout-row">
	@include('layouts.basik.sidebarmenu')
	<div id="main" class="layout-column flex bg-content" style="overflow:scroll;">
		@include('layouts.basik.headercontent')
		<div id="content" class="flex">
			@yield('content')
		</div>
		@include('layouts.basik.footercontent')
	</div>
</body>

<!-- Bootstrap -->
<script src="{{ asset('/template/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('/template/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- ajax -->
<script src="{{ asset('/template/libs/typeahead.js/dist/typeahead.bundle.min.js') }}"></script>

<!-- <script src="{{ asset('/template/libs/pjax/pjax.min.js') }}"></script> -->
<!-- <script src="{{ asset('/template/assets/js/ajax.js') }}"></script> -->
<!-- lazyload plugin -->
<script src="{{ asset('/template/assets/js/lazyload.config.js') }}"></script>
<script src="{{ asset('/template/assets/js/lazyload.js') }}"></script>
<script src="{{ asset('/template/assets/js/plugin.js') }}"></script>
<!-- scrollreveal -->
<script src="{{ asset('/template/libs/scrollreveal/dist/scrollreveal.min.js') }}"></script>
<!-- feathericon -->
<script src="{{ asset('/template/libs/feather-icons/dist/feather.min.js') }}"></script>
<script src="{{ asset('/template/assets/js/plugins/feathericon.js') }}"></script>
<!-- theme -->
<script src="{{ asset('/template/assets/js/theme.js') }}"></script>
<script src="{{ asset('/template/assets/js/utils.js') }}"></script>

@yield('footbody')
</html>