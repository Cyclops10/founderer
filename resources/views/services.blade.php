@extends('layouts.front')

@section('content')

			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 320px;">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 800, 'gridheight': 320, 'spinner': 'off'}">
						<ul>
							<li data-transition="fade">
								<img src="front/video/landing.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<div class="rs-background-video-layer"
									data-forcerewind="on"
									data-volume="mute"
									data-videowidth="100%"
									data-videoheight="100%"
									data-videomp4="front/video/landing.mp4"
									data-videopreload="preload"
									data-videoloop="loop"
									data-forceCover="1"
									data-aspectratio="16:9"
									data-autoplay="true"
									data-autoplayonlyfirsttime="false"
								></div>

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>
						</ul>
					</div>
				</div>

				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 mt-5 title-with-video-custom text-center">
							<h1 class="mt-5 font-weight-semibold text-uppercase">Services.</h1>
							<p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
						</div>
					</div>
				</div>

				<section class="section section-default mt-0">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-10">
								<h2 class="mt-5 mb-5 pb-0">We create amazing solution lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</h2>
							</div>
							<div class="col-lg-2 text-center">
								<img src="front/img/apple-touch-icon.png" class="img-fluid" />
							</div>
						</div>
					</div>
				</section>

				<section class="m-5 pb-5">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="mb-0 mt-3 font-weight-semibold">We Can Help You With:</h2>
								<p class="lead mb-3">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-5">
							<div class="col-md-10 col-lg-4 text-center">
								<div class="feature-box feature-box-style-4 justify-content-center appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
									<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
										<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
											<span class="box-content p-0 m-0">
												<i class="icon-featured icon-bulb icons"></i>
											</span>
										</span>
									</span>
									<div class="feature-box-info">
										<h4 class="mb-2 mt-2">Strategy</h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-md-10 col-lg-4 text-center">
								<div class="feature-box feature-box-style-4 justify-content-center appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
									<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
										<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
											<span class="box-content p-0 m-0">
												<i class="icon-featured icon-puzzle icons"></i>
											</span>
										</span>
									</span>
									<div class="feature-box-info">
										<h4 class="mb-2 mt-2">Development</h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-md-10 col-lg-4 text-center">
								<div class="feature-box feature-box-style-4 justify-content-center appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
										<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
											<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
												<span class="box-content p-0 m-0">
													<i class="icon-featured icon-rocket icons"></i>
												</span>
											</span>
										</span>
									<div class="feature-box-info">
										<h4 class="mb-2 mt-2">Marketing</h4>
										<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="pb-5">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="mb-0 font-weight-semibold">How We Do:</h2>
								<p class="lead mb-3">Pellentesque pellentesque eget tempor tellus. </p>
								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container-fluid">
					<div class="row featured-boxes-full featured-boxes-full-scale clearfix">
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-directions icons"></i>
							<h4 class="mt-3">1 - BRIEF</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-puzzle icons"></i>
							<h4 class="mt-3">2 - CREATION</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
						</div>
						<div class="col-lg-4 featured-box-full featured-box-full-primary">
							<i class="icon-rocket icons"></i>
							<h4 class="mt-3">3 - LAUNCH</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit.</p>
						</div>
					</div>
				</div>

				<section class="section section-default section-footer section-color-custom mt-0 pt-2 pb-5">
					<div class="container">
						<div class="row mt-2 mb-4">
							<div class="col-lg-4 text-center">
								<img class="img-fluid appear-animation" src="front/img/projects/project-masonry-25.jpg" alt="layout styles" data-appear-animation="fadeInLeft">
							</div>
							<div class="col-lg-7 col-lg-offset-1">
								<h2 class="mb-1 mt-5 font-weight-semibold">Innovation.</h2>
								<div class="divider divider-primary divider-small mb-5">
									<hr>
								</div>
								<p class="lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
								</p>

								<a class="btn btn-outline btn-lg btn-primary mt-4" target="_blank" href="demo-digital-agency-contact.html">Get a Quote!</a>
							</div>
						</div>
					</div>
				</section>
			</div>

@endsection