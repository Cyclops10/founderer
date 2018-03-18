@extends('layouts.front')

@section('content')

			<div role="main" class="main">
				<section class="section section-text-light section-default section-default-scale-8 section-center mt-0">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8 mt-5">
								<h1 class="mt-5 font-weight-semibold text-uppercase">Say Hello.</h1>
								<p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Nulla consequat massa quis enim.</p>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-lg-10">
								<div class="row justify-content-between mt-4 text-left">
									<div class="col-lg-5 mb-4">
										<h4 class="mt-3 mb-0">New York</h4>
										<ul class="list list-icons mt-3">
											<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
											<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
											<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
										</ul>
									</div>
									<div class="col-lg-5 mb-4">
										<h4 class="mt-3 mb-0">Los Angeles</h4>
										<ul class="list list-icons mt-3">
											<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street, City Name, United States</li>
											<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
											<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-lg-10 text-center">

								<div class="divider divider-primary divider-small divider-small-center mb-3">
									<hr>
								</div>

								<h2 class="mb-0 mt-4 font-weight-semibold">Send us a Message.</h2>
								<p class="lead mb-0">Pellentesque pellentesque eget tempor tellus. </p>

								<div class="divider divider-style-4 divider-primary divider-top-section-custom taller">
									<i class="fa fa-chevron-down"></i>
								</div>

							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row justify-content-center mt-5">
						<div class="col-lg-10">

							<div class="alert alert-success d-none mt-4" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger d-none mt-4" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control form-control-lg" name="name" id="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control form-control-lg" name="email" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control form-control-lg" name="subject" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="10" class="form-control form-control-lg" name="message" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" class="btn btn-primary btn-xl mb-1" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>

					</div>

				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map"></div>
			</div>

@endsection

@section('pagespecificscripts')

		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			},{
				latitude: "34.05223",
				longitude: "-118.24368",
				html: "<strong>Los Angeles Office</strong><br>Los Angeles<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			var initLatitude = 37.09024;
			var initLongitude = -95.71289;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Create an array of styles.
			var mapColor = "#567522";

			var styles = [{
				stylers: [{
					hue: mapColor
				}]
			}, {
				featureType: "road",
				elementType: "geometry",
				stylers: [{
					lightness: 0
				}, {
					visibility: "simplified"
				}]
			}, {
				featureType: "road",
				elementType: "labels",
				stylers: [{
					visibility: "off"
				}]
			}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>
@stop