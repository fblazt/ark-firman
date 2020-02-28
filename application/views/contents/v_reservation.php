
	<style type="text/css">
		html, body {
			background: linear-gradient(0deg, rgba(15, 13, 48, 0.76), rgba(15, 13, 48, 0.76)), url(<?= base_url('assets/img/AdobeStock_310153350_Preview.jpeg'); ?>) no-repeat fixed center;
			background-size: cover;
			height: 100%;
		}
		a {
			padding-left: 50px;
			margin-top: 50px;
			color: #f2b57b;
		}
		h1 {
			font-family: Pacifico;
			font-size: 55px;
			color: #f2b57b;
		}
		button {
			color: white !important;
			background-color: #f2b57b !important;
			border-color: #f2b57b !important;
			width: 100% !important;
		}
	</style>
</head>
	<body>
		<nav class="navbar fixed-top">
		  <a class="navbar-brand" href="<?= base_url('travel'); ?>"><i class="fas fa-arrow-left fa-2x"></i></a>
		</nav>
		<div class="container h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-4 text-center">
					<h1>Reservation</h1>
					<form class="mt-5">
						<div class="form-group w-100  ">
							<div class="row">
								<div class="col">
									<input type="text" class="form-control my-3" name="name" placeholder="Input your name">
									<input type="email" class="form-control my-3" name="email" placeholder="Input your email">
										<div class="row my-3">
											<div class="col">
												<input type="number" class="form-control" name="phone" placeholder="Phone number">
											</div>
											<div class="col">
												<select class="form-control">
													<option>
														Select your nationality
													</option>
												</select>
											</div>
										</div>
									<textarea class="form-control my-1" name="story" placeholder="Explain about your trip"></textarea>
								</div>
							</div>	
							<button type="submit" class="btn btn-primary w-100 my-2">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>