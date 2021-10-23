	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-12 col-md d-flex align-items-center">
					<p class="mb-0 phone">
						<span class="mailus">Phone no:</span>
						<a href="#">
							<?php echo($phone_no) ?>	
						</a>
							or 
							<span class="mailus">email us:</span>
						<a href="#"><?php echo($email) ?></a>
					</p>
				</div>
				<div class="col-12 col-md d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a target="_blank" href="<?php echo($facebook) ?>" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-facebook">
									<i class="sr-only">Facebook</i>
								</span>
							</a>
							<a target="_blank" href="<?php echo($twitter) ?>" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-twitter">
									<i class="sr-only">Twitter</i>
								</span>
							</a>
							<a target="_blank" href="<?php echo($instagram) ?>"
								class="d-flex align-items-center justify-content-center">
								<span class="fa fa-instagram">
									<i class="sr-only">Instagram</i>
								</span>
							</a>
							<a target="_blank" href="<?php echo($youtube) ?>" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-youtube">
									<i class="sr-only">Youtube</i>
								</span>
							</a>
							<a target="_blank" href="<?php echo($linkedin) ?>" class="d-flex align-items-center justify-content-center">
								<span class="fa fa-linkedin">
									<i class="sr-only">LinkedIn</i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"><?php echo($short_name) ?></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->