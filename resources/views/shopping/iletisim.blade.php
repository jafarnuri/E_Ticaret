@extends('shopping_layout.master')



@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="{{route('home')}}">Ana Sayfa</a> &rsaquo; Iletishim</div>
							<div class="bigtitle">Iletishim</div>
						</div>
				
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="title-bg">
			<div class="title">Iletisim</div>
		</div>
		<div class="row">
			<div class="col-md-4">
	
				<ul class="contact-widget">
					<li class="fphone">{{$ayarlar->ayar_gsm}}</li>
					<li class="fmobile">{{$ayarlar->ayar_tel}}</li>
					<li class="fmail lastone">{{$ayarlar->ayar_mail}}</li>
					<li class="fas fa-address-book">{{$ayarlar->ayar_faks}}</li>
					<li class="fmail lastone">{{$ayarlar->ayar_ilce}}</li>
					<li class="fmail lastone">{{$ayarlar->ayar_il}}</li>
					<li class="fmail lastone">{{$ayarlar->ayar_adres}}</li>
					<li class="fmail lastone">{{$ayarlar->ayar_mesai}}</li>
				</ul>
			</div>
			<div class="col-md-7 col-md-offset-1">
				<div class="loc">
					<div id="map_canvas"></div>
				</div>
			</div>
		</div>


		<div class="spacer"></div>
		
	</div>
@endsection