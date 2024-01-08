<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							<ul class="top-link">
								<li><a href="#about">A Propos</a></li>
								<li><a href="#">Nos Spécialistes</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+225 07 06 210 225</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:support@medilink.com">support@medilink.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="{{asset('../assets/img/logo.png')}}" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Menu Principal -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li class="active"><a href="#">Accueil</a></li> 
											<li><a href="#">Nos Spécialistes</a></li>
											<li><a href="#">Services </a></li>
											<li><a href="blog-single.html">Blogs</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

                            @if (Route::has('login'))

                            @auth
                                <x-app-layout>

                                </x-app-layout>

                            @else
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="{{route('login')}}" class="btn">Connexion</a>
								</div>
                                <div class="get-quote">
									<a href="{{route('register')}}" class="btn">Inscription</a>
								</div>
							</div>

                            @endauth

                            @endif
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->