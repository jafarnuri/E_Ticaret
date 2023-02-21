@extends('shopping_layout.master')



@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="{{route('home')}}">Ana Sayfa</a> &rsaquo; Haqqimizda</div>
							<div class="bigtitle">Haqqimizda</div>
						</div>
					
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Haqqimizda</div>
				</div>

				<div class="col-lg-6">
				<p>{{$haqqimizda->haqqimizda_baslik}}</p>
            <img src="{{asset('dimg/haqqimizda/'.$haqqimizda->haqqimizda_logo)}}" class="img-fluid rounded-4 mb-4" alt="">
            <p>{{$haqqimizda->haqqimizda_icerik}}</p>
			<div class="title-bg">
				<div class="title">Tanıtım Videosu</div>
			</div>

			<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$haqqimizda->haqqimizda_vidio}}" frameborder="0" allowfullscreen></iframe>
          </div>
			</div>
            @include('shopping.sidebar-kategori')
		</div>
		<div class="spacer"></div>
	</div>
    @endsection