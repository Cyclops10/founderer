@extends('layouts.login_reg')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
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
					<img src="{{URL::asset('img/logo.png')}}" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="fa fa-user mr-1"></i> Sign Up</h2>
					</div>
					<div class="card-body">
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
						    {{ csrf_field() }}

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-3">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <label>First Name</label>
                                        <input name="first_name" type="text" class="form-control form-control-lg" value="{{ old('first_name') }}" required autofocus />
                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <label>Last Name</label>
                                        <input name="last_name" type="text" class="form-control form-control-lg" value="{{ old('last_name') }}" required autofocus />
                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
							</div>

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-3">
								<label>E-mail Address</label>
								<input name="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" required/>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-0">
								<div class="row">
									<div class="col-sm-6 mb-3">
										<label>Password</label>
										<input name="password" type="password" class="form-control form-control-lg" required/>
										@if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
									</div>
									<div class="col-sm-6 mb-3">
										<label>Password Confirmation</label>
										<input name="password_confirmation" type="password" class="form-control form-control-lg"  required/>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign Up</button>
								</div>
							</div>

							<span class="mt-3 mb-3 line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-1 text-center">
								<a href="{{ route('social_login','linkedin') }}" class="btn btn-linkedin mb-3 ml-1 mr-1" href="#">Connect with <i class="fa fa-linkedin"></i></a>
								<a href="{{ route('social_login','google') }}" class="btn btn-gplus mb-3 ml-1 mr-1" href="#">Connect with <i class="fa fa-google"></i></a>
							</div>

							<p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign In!</a></p>

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

@endsection
