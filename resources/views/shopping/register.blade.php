@extends('shopping_layout.master')



@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="#">Ana Sayfa</a> &rsaquo; <a href="{{route('login')}}"><h3>Girish</h3></a></div>
							<div class="bigtitle">Qeydiyyat</div>
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		
		<form action="{{route('register_action')}}" method="POST" class="form-horizontal checkout" role="form">
		@csrf
			<div class="row">
				<div class="col-md-6">
					<div class="title-bg">
						<div class="title">Shexsi Melumatlar</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="ad" required="" placeholder="Adinizi....">
						</div>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="user_ad" required=""  placeholder="Istufadeci adniz....">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email" required="" placeholder="Emailiniz....">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<input type="password" class="form-control" name="password" required=""  placeholder="Shifreniz....">
						</div>

						<div class="col-sm-6">
							<input type="password" class="form-control" name="passwordtwo" required="" placeholder="Tekrar shifre....">
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6">
				<button class="btn btn-default btn-red">Qeydiyyat</button>
				</div>
			</div>
		</form>
		<div class="spacer"></div>
	</div>
	@endsection