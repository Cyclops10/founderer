<header id="header" class="header-semi-transparent" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '0'}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-digital-agency.html">
											<img alt="Porto" width="131" height="40" src="front/img/demos/digital-agency/logo-digital-agency.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-stripe">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="{{ route('home') }}">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ route('about') }}">
															About
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ route('services') }}">
															Services
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ route('work') }}">
															Work
														</a>
													</li>
													<li>
														<a class="nav-link" href="{{ route('contact') }}">
															Contact
														</a>
													</li>

													@if (Route::has('login'))
                                                        @if (Auth::check())
                                                            <li>
                                                                {{--<a href="{{ url('/home') }}">Home</a>--}}
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="caret"></span>
                                                                </a>

                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li>
                                                                        <a class="nav-link" href="{{ route('logout') }}"
                                                                            onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                                            Logout
                                                                        </a>

                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ url('/register') }}">Register</a>
                                                            </li>
                                                        @endif
                                                    @endif
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>