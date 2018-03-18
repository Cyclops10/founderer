@extends('layouts.front')

@section('content')

			<div role="main" class="main">
				<section class="section section-text-light section-default section-default-scale-8 section-center mt-0 mb-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8 mt-5">
								<h1 class="mt-5 font-weight-semibold text-uppercase">Project Name.</h1>
								<p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
							</div>
						</div>
					</div>
				</section>

				<div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0 mb-4" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'animateOut': 'fadeOut'}">
					<div>
						<img src="front/img/projects/project-full-width-2-digital-agency.jpg" class="img-fluid" alt="">
					</div>
					<div>
						<img src="front/img/projects/project-full-width-digital-agency.jpg" class="img-fluid" alt="">
					</div>
				</div>

				<div class="container">
					<div class="row">

						<div class="col">

							<div class="portfolio-info mt-lg-4 float-left">
								<div class="row">
									<div class="col-lg-12 text-center">
										<ul>
											<li>
												<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
											</li>
											<li>
												<i class="fa fa-calendar"></i> 01 January 2017
											</li>
											<li>
												<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
											</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row align-items-baseline">

						<div class="col-lg-7">

							<h5 class="mt-4 mb-2">Project Description</h5>
							<p class="mt-0 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris.</p>

							<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a>

							<ul class="portfolio-details mt-4">
								<li>
									<h5 class="mt-2 mb-1">Skills</h5>

									<ul class="list list-inline list-icons">
										<li class="list-inline-item"><i class="fa fa-check-circle"></i> Design</li>
										<li class="list-inline-item"><i class="fa fa-check-circle"></i> HTML/CSS</li>
										<li class="list-inline-item"><i class="fa fa-check-circle"></i> Javascript</li>
										<li class="list-inline-item"><i class="fa fa-check-circle"></i> Backend</li>
									</ul>
								</li>
							</ul>

						</div>
						<div class="col-lg-5">

							<ul class="portfolio-details mt-0 mb-5">
								<li>
									<h5 class="mb-2">Client</h5>
									<p>Okler Themes - <a href="http://www.okler.net" target="_blank"><i class="fa fa-external-link"></i> http://www.okler.net</a></p>
								</li>
							</ul>

							<div class="testimonial testimonial-style-4">
								<blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
								</blockquote>
								<div class="testimonial-arrow-down"></div>
								<div class="testimonial-author">
									<div class="testimonial-author-thumbnail">
										<img alt="" class="img-fluid rounded-circle" src="front/img/clients/client-1.jpg">
									</div>
									<p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

@endsection