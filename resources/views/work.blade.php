@extends('layouts.front')

@section('content')

			<div role="main" class="main">
				<section class="parallax section section-text-light section-parallax section-center mt-0 mb-5" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="front/img/slides/slide-corporate-6.jpg">
					<div class="container">
						<div class="row justify-content-center mt-5">
							<div class="col-lg-8 mt-5">
								<h1 class="mt-2 font-weight-semibold text-uppercase">Work.</h1>
								<p class="mb-4 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<ul class="nav nav-pills sort-source mt-5 mb-5" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
						<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
						<li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
						<li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
						<li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
						<li class="nav-item" data-option-value=".medias"><a class="nav-link" href="#">Medias</a></li>
					</ul>

					<div class="sort-destination-loader sort-destination-loader-showing">
						<div class="row portfolio-list no-gutters sort-destination mb-5" data-sort-id="portfolio">
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Presentation</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 medias">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project-1.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Porto Mockup</span>
													<span class="thumb-info-type">Media</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project-3.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Watch Mockup</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 logos">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project-25.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Black Watch</span>
													<span class="thumb-info-type">Media - Medium</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 brands">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project-5.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Company T-Shirt</span>
													<span class="thumb-info-type">Brand</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-4 isotope-item m-0 p-0 websites">
								<div class="portfolio-item m-0">
									<a href="{{ route('work-details') }}">
										<span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-0">
											<span class="thumb-info-wrapper">
												<img src="front/img/projects/project-6.jpg" class="img-fluid" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner">Mobile Mockup</span>
													<span class="thumb-info-type">Website</span>
												</span>
												<span class="thumb-info-action">
													<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
												</span>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

@endsection