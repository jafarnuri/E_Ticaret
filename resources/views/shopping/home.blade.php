<?php
use App\Models\Haqqimizda;
$haqqimizda=Haqqimizda::all()->first();
use App\Models\Urun;
$urunler=Urun::get();
?>

@extends('shopping_layout.master')



@section('content')

<div class="clearfix"></div>
		<div class="lines"></div>
		 
			<div class="main-slide">
			<div id="sync1" class="owl-carousel">
            @foreach($urunler as $urunlercek)
			<div class="item">
					<div class="slide-desc">
						<div class="inner">
							<h1>{{$urunlercek->urun_ad}}</h1>
							<p>
							{{$urunlercek->urun_detay}}
							</p>
						</div>
						<div class="inner">
							<div class="pro-pricetag big-deal">
								<div class="inner">
										<span class="oldprice">${{$urunlercek->urun_endirimfyat}}</span>
										<span>${{$urunlercek->urun_fiyat}}</span>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-type-1">
					<a href="{{url('/urundetay/'.$urunlercek->id)}}" ><img src="{{asset('dimg/urunler/'.$urunlercek->urun_resm)}}" alt="" class="img-responsive"></a>
					</div>
				</div>
@endforeach
			</div>
	    	</div>

		
		  

		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Haqqimizda</div>
				</div>
				<p class="ct">
				{{$haqqimizda->haqqimizda_icerik}}
                       </p>
				<div class="spacer"></div>
			</div><!--Main content-->
			@include('shopping.sidebar-kategori')
		</div>
	</div>

@endsection