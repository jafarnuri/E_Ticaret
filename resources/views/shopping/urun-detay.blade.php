@extends('shopping_layout.master')



@section('content')

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="{{route('home')}}">Ana Sayfa</a> &rsaquo; Urun Detay</div>
							<div class="bigtitle"> Urun Detay</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">{{$urunler->urun_ad}}</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="dt-img">
							<div class="detpricetag"><div class="inner">${{$urunler->urun_fiyat}}</div></div>
							<a class="fancybox" href="images\sample-1.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon">
							<img src="{{asset('dimg/urunler/'.$urunler->urun_resm)}}" alt="" class="img-responsive"></a>
						</div>
					</div>
					<div class="col-md-6 det-desc">
						<div class="productdata">
							<div class="infospan">Model <span>{{$urunler->urun_model}}</span></div>
							<div class="infospan">Id kodu <span>{{$urunler->id}}</span></div>
							<div class="infospan">Istehlakci <span>{{$urunler->urun_firma}}</span></div>
							<div class="average">
							<form role="form">

							</form>
							</div>
				
							
							<form class="form-horizontal ava" role="form">
		
								<div class="form-group">
									<label for="color" class="col-sm-2 control-label">Reng</label>
									<div class="col-sm-10">
										<select class="form-control" id="color">
											<option>Blank 1
											<option>Blank 2
											<option>Blank 3
											<option>Blank 4
											<option>Blank 5
										</select>
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								<div class="form-group">
									<label for="qty" class="col-sm-2 control-label">Say</label>
									<div class="col-sm-4">
										<select class="form-control" id="qty">
											<option>1
											<option>2
											<option>3
											<option>4
											<option>5
										</select>
									</div>
									<div class="col-sm-4">
										<button class="btn btn-default btn-red btn-sm"><span class="addchart">Add To Chart</span></button>
									</div>
									<div class="clearfix"></div>
								</div>
							</form>
				
						</div>
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class="active"><a href="#desc" data-toggle="tab">Urun Detay</a></li>
						<li class=""><a href="#rev" data-toggle="tab">Yorumlar (0)</a></li>
						<li class=""><a href="#video" data-toggle="tab">Urun Video</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<p>
							{{$urunler->urun_detay}}
							</p>
						</div>
						<div class="tab-pane fade" id="rev">
							<p class="dash">
							<span>Jhon Doe</span> (11/25/2012)<br><br>
							Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.
							</p>
							<h4>Yorum yaz</h4>

						  <form action="" method="POST" role="form">

							<div class="form-group">
								<textarea class="form-control" id="text"></textarea>
							</div>
		
							<button  type="submit" class="btn btn-default btn-red btn-sm">Gonder</button>
						  </form>
							
						</div>

						<div class="tab-pane fade " id="video">
									<p>

										<iframe width="560" height="315" src="https://www.youtube.com/embed/{{$urunler->urun_video}}" frameborder="0" allowfullscreen></iframe>

									</p>
								</div>
					</div>
				</div>
				
				<div id="title-bg">
					<div class="title">Related Product</div>
				</div>
				<div class="row prdct"><!--Products-->
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="product.htm"><img src="{{asset('/')}}frontend/images\sample-4.jpg" alt="" class="img-responsive"></a>
								<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
							</div>
							<span class="smalltitle"><a href="product.htm">Lens</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="product.htm"><img src="{{asset('/')}}frontend/images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner">$199</div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
					<div class="col-md-4">
						<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="{{asset('/')}}frontend/images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag"><div class="inner">$199</div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
						</div>
					</div>
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
			
			<!--sidebar-->
			@include('shopping.sidebar-kategori')
			<!--sidebar-->
		</div>
	</div>
	@endsection