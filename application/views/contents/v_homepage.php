
	<style type="text/css">
		a {
			padding: 10px 35px 10px !important;
		}
		body {
			background: linear-gradient(0deg, rgba(15, 13, 48, 0.76), rgba(15, 13, 48, 0.76)), url(<?= base_url('assets/img/AdobeStock_84849478_Preview.jpeg'); ?>) no-repeat fixed center;
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
			color: white;
		}.btn-outline-warning {
			color: #f2b57b !important; 
			border-color: #f2b57b !important;
		}
		.btn-outline-warning:hover {
			color: white !important;
		}
		.btn-warning {
			color: white !important;
			background-color: #f2b57b;
			border-color: #f2b57b;
		}
		.heading {
			font-size: 45px;
		}
		h1, #first {
			color: white;

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
					<img id="pura" class="mt-5" src="<?= base_url('/assets/img/bali.svg'); ?>">
					<h1 class="mt-5">
						<div class="heading" id="first">A Better way to</div>
						<div class="heading" id="second">Travel to Bali</div>
					</h1>
					<p>Cheapest and Easier</p>
					<div class="mt-5 mb-5">
						<a class="btn btn-outline-warning" href="<?= base_url('travel/about'); ?>">About Us</a>
						<a class="btn btn-warning" href="<?= base_url('travel/reservation'); ?>">Reservation</a>
					</div>
				</div>
			</div>
		</div>
	</body>