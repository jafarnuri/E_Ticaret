	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="{{route('home')}}" class="active">Ana Sayfa</a><div class="curve"></div></li>
								<li><a href="{{route('haqqimizda')}}">Haqqimizda</a></li>
								<li><a href="{{route('iletisim')}}">Iletishim</a></li>
								<li><a href="{{route('kategori')}}">Kategoriler</a></li>
								<li><a href="contact.htm">Gizlilik Koshullari</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-2 machart">
						<button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Cart</span>|<span class="allprice">$0.00</span></button>
						<div class="popcart">
							<table class="table table-condensed popcart-inner">
								<tbody>
									<tr>
										<td>
										<a href="product.htm"><img src="{{asset('/')}}frontend/images\dummy-1.png" alt="" class="img-responsive"></a>
										</td>
										<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
										<td>1X</td>
										<td>$138.80</td>
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
									</tr>
									<tr>
										<td>
										<a href="product.htm"><img src="{{asset('/')}}frontend/images\dummy-1.png" alt="" class="img-responsive"></a>
										</td>
										<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
										<td>1X</td>
										<td>$138.80</td>
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
									</tr>
									<tr>
										<td>
										<a href="product.htm"><img src="{{asset('/')}}frontend/images\dummy-1.png" alt="" class="img-responsive"></a>
										</td>
										<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
										<td>1X</td>
										<td>$138.80</td>
										<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
									</tr>
								</tbody>
							</table>
							<span class="sub-tot">Sub-Total : <span>$277.60</span> | <span>Vat (17.5%)</span> : $36.00 </span>
							<br>
							<div class="btn-popcart">
								<a href="checkout.htm" class="btn btn-default btn-red btn-sm">Checkout</a>
								<a href="cart.htm" class="btn btn-default btn-red btn-sm">More</a>
							</div>
							<div class="popcart-tot">
								<p>
									Total<br>
									<span>$313.60</span>
								</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--end main-nav -->
