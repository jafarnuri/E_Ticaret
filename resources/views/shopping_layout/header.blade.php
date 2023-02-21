	<div class="header"><!--Header -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="{{route('home')}}"><img src="{{asset('dimg/logo/'.$ayarlar->ayar_logo)}}" alt="logo" class="logo img-responsive"></a>
				</div>
				<div class="col-md-8">
					<div class="pushright">
						<div class="top">
							<a href="#" id="reg" class="btn btn-default btn-dark">Login<span>-- Or --</span>Register</a>
							<a href="{{route('logout')}}" id="reg" class="btn btn-default btn-dark">Logout</a>
							<div class="regwrap">
								<div class="row">
									<div class="col-md-6 regform">
										<div class="title-widget-bg">
											<div class="title-widget">Login</div>
										</div>
										<form action="{{route('login')}}" method="GET" role="form">
											@csrf
											<p>
											New User? By creating an account you be able to shop faster, be up to date on an order's status...
										    </p>
											<div class="form-group">
												<button class="btn btn-default btn-red btn-sm">Sign In</button>
											</div>
										</form>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Register</div>
										</div>
										<p>
											New User? By creating an account you be able to shop faster, be up to date on an order's status...
										</p>
										<a href="{{route('register')}}" ><button class="btn btn-default btn-yellow">Register Now</button>
									</div>
								</div>
							</div>
							<div class="srch-wrap">
								<a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
							</div>
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal" role="form">
										@csrf
											<div class="form-group">
												<label for="search" class="col-sm-2 control-label">Search</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="search">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->
