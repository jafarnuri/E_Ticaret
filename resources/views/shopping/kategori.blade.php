@extends('shopping_layout.master')



@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="{{route('home')}}">Ana Sayfa</a> &rsaquo; Kategoriler</div>
							<div class="bigtitle">Kategori</div>
						</div>

					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Kategoriler-Butun Urunler</div>
					<div class="title-nav">
						<a href=""><i class="fa fa-th-large"></i>grid</a>
						<a href=""><i class="fa fa-bars"></i>List</a>
					</div>
				</div>
				<div class="row prdct"><!--Products-->
				@foreach($urunler as $uruncek)

					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div ></div>
								<a href="{{url('/urundetay/'.$uruncek->id)}}" ><img src="{{asset('dimg/urunler/'.$uruncek->urun_resm)}}" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">${{$uruncek->urun_endirimfyat}}</span>${{$uruncek->urun_fiyat}}</span></div></div>
							</div>
							<span class="smalltitle"><a href="{{url('/urundetay/'.$uruncek->id)}}">{{$uruncek->urun_ad}}</a></span>
							
						</div>
					</div>
					@endforeach
				</div><!--Products-->
				<ul class="pagination shop-pag"><!--pagination-->
					<li><a href="#"><i class="fa fa-caret-left"></i></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
				</ul><!--pagination-->

			</div>
			@include('shopping.sidebar-kategori')
		</div>
		<div class="spacer"></div>
	</div>

@endsection