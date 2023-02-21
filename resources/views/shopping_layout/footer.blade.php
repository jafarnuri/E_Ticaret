<?php
use App\Models\Ayarlar;
$ayarlar=Ayarlar::all()->first();
?>
	<div class="f-widget"><!--footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Twitter Updates</div>
					</div>
					<ul class="tweets">
						<li>Check out this great #themeforest item for you
						'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
						<span>2 hours ago</span></li>
						<li class="lastone">Check out this great #themeforest item for you
						'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
						<span>2 hours ago</span></li>
					</ul>
					<div class="clearfix"></div>
					<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i><div>Follow us on twitter</div></a>
				</div><!--footer twitter widget-->
				<div class="col-md-4"><!--footer newsletter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Newsletter Signup</div>
					</div>
					<div class="newsletter">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form role="form">
							<div class="form-group">
								<label>Your Email address</label>
								<input type="email" class="form-control newstler-input" id="exampleInputEmail1" placeholder="Enter email">
								<button class="btn btn-default btn-red btn-sm">Sign Up</button>
							</div>
						</form>
					</div>
				</div><!--footer newsletter widget-->
				<div class="col-md-4"><!--footer contact widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">BazarAz</div>
					</div>
					<ul class="contact-widget">
						<li class="fphone">{{$ayarlar->ayar_tel}}</li>
						<li class="fmobile">{{$ayarlar->ayar_gsm}}</li>
						<li class="fmail lastone">{{$ayarlar->ayar_mail}}</li>
					</ul>
				</div><!--footer contact widget-->
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	<div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<ul class="footermenu"><!--footer nav-->
						<li><a href="index-1.htm">Home</a></li>
						<li><a href="cart.htm">My Cart</a></li>
						<li><a href="checkout.htm">Checkout</a></li>
						<li><a href="order.htm">Completed Orders</a></li>
						<li><a href="contact.htm">Contact us</a></li>
					</ul><!--footer nav-->
					<div class="f-credit">&copy;All rights reserved by <a href="#">yoursite.com</a></div>
					<a href=""><div class="payment visa"></div></a>
					<a href=""><div class="payment paypal"></div></a>
					<a href=""><div class="payment mc"></div></a>
					<a href=""><div class="payment nh"></div></a>
				</div>
				<div class="col-md-3"><!--footer Share-->
					<div class="followon">Follow us on</div>
					<div class="fsoc">
						<a href="{{$ayarlar->ayar_twitter}}" class="ftwitter"></a>
						<a href="{{$ayarlar->ayar_facebook}}" class="ffacebook"></a>
						<a href="{{$ayarlar->ayar_youtube}}" class="fflickr"></a>
						<a href="{{$ayarlar->ayar_google}}" class="ffeed"></a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->
