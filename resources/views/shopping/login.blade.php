@extends('shopping_layout.master')



@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="#">Ana Sayfa</a> &rsaquo; <a href="{{route('register')}}"> Qeydiyyat</a></div>
							<div class="bigtitle">Giris</div>
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		@if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif
		<form action="{{route('login_action')}}" method="POST" class="form-horizontal checkout" role="form">
		@csrf
			<div class="row">
				<div class="col-md-6">
					<div class="title-bg">
						<div class="title">Giris Edin ya da Qeydiyyatdan  kecin</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="user_ad" id="first-name" placeholder="Istufadeci adniz....">
						</div>
					</div>
	

					<div class="form-group">
						<div class="col-sm-6">
							<input type="password" class="form-control" name="password" id="first-name" placeholder="Shifreniz....">
						</div>

					</div>
				</div>
			</div>
				<div class="col-md-6">
				<button class="btn btn-default btn-red">Girish</button>
				</div>
			</div>
		</form>
		<div class="spacer"></div>
	</div>
	@endsection