@extends('layouts.login_reg')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!-- start: page -->
<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo float-left">
					<img src="img/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fa fa-user mr-1"></i> Log In</h2>
					</div>
					<div class="card-body">
						<form method="post" action="{{ route('login') }}">

						{{ csrf_field() }}

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input id="email" name="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" required autofocus/>

									@if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="{{ route('password.request') }}" class="float-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" id="password" class="form-control form-control-lg" required />
									@if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox" {{ old('remember') ? 'checked' : '' }}/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Log In</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a href="{{ route('social_login','linkedin') }}" class="btn btn-linkedin mb-3 ml-1 mr-1" href="#">Connect with <i class="fa fa-linkedin"></i></a>
								<a href="{{ route('social_login','google') }}" class="btn btn-gplus mb-3 ml-1 mr-1" href="#">Connect with <i class="fa fa-google"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="#" data-toggle="modal" data-target="#defaultModal">Sign Up!</a></p>

                            {{--<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#defaultModal">Launch Default Modal</button>--}}
                            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="defaultModalLabel">Default Modal Title</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6" style="text-align: center;"><a href="{{ url('investor/register') }}"><button type="button" class="btn btn-outline btn-primary btn-xl mb-2">As Investor</button></a></div>
                                                <div class="col-md-6" style="text-align: center;"><a href="{{ url('founderer/register') }}"><button type="button" class="btn btn-outline btn-primary btn-xl mb-2">As Founderer</button></a></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>

		<!-- end: page -->
@endsection
