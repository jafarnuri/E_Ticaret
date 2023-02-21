<?php
use App\Models\Kategori;
$kategori=Kategori::get();
?>
           <div class="col-md-3">
				<div class="title-bg">
					<div class="title">Kategoriler</div>
				</div>
				
				<div class="categorybox">
					<ul>
                        @foreach($kategori as $kategoricek)
						<li><a href="{{url('/kategorilist/'.$kategoricek->id)}}">{{$kategoricek->kategori_ad}}</a></li>
                        @endforeach
					</ul>
				</div>


			</div>