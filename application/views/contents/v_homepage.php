
	<style type="text/css">
		a {
			font-size: 13px !important;
			padding: 12px 45px 12px !important;
		}
		body {
			background: linear-gradient(0deg, rgba(26, 25, 46, 0.75), rgba(26, 25, 46, 0.75)), url(<?= base_url('assets/img/AdobeStock_84849478_Preview.jpeg'); ?>) no-repeat fixed center;
			background-size: cover;
			height: 100%;
		}
		h1 {
			line-height: 1.6;
		}
		h1, a {
			font-family: Pacifico;
		}
		p {
			font-family: Roboto;
			font-size: 14px;
			color: #FFF;
		}
		.btn-outline-warning {
			color: #f2b57b !important; 
			border-color: #f2b57b !important;
		}
		.btn-outline-warning:hover {
			color: #FFF !important;
			background-color: rgba(215, 85, 15, 0.71) !important; 
		}
		.btn-warning {
			color: #FFF !important;
			background-color: #f2b57b;
			border-color: #f2b57b;
		}
		.btn-warning:hover {
			color: #FFF !important;
			background-color: rgba(215, 85, 15, 0.71) !important;
			border-color: #f2b57b !important;
		}
		.heading {
			font-size: 52px;
		}
		h1, #first {
			color: #FFF;
		}
		#pura {
			width: 100px;
			height: 100px;
			filter: invert(100%) sepia(94%) saturate(25%) hue-rotate(21deg) brightness(107%) contrast(106%);
		}
		h1, #second {
			color: #f2b57b;
		}
	</style>
</head>
	<body>

		<div class="container conntainer-fluid">
			<div class="row justify-content-center">
				<div class="col-6 mt-5 text-center">

					<!--temple icon-->
					<img id="pura" class="mt-5" src="<?= base_url('/assets/img/bali.svg'); ?>">

					<!--heading-->
					<h1 class="mt-5 mb-2">
						<div class="heading" id="first">A Better way to</div>
						<div class="heading" id="second">Travel to Bali</div>
					</h1>

					<!--marketing words???-->
					<p>Cheapest and Easier</p>

					<!--navigation-->
					<div class="my-5">
						<a class="btn btn-outline-warning mx-1" href="<?= base_url('travel/about'); ?>">About Us</a>
						<a class="btn btn-warning mx-1" href="<?= base_url('travel/reservation'); ?>">Reservation</a>
					</div>

				</div>
			</div>
		</div>

	</body>