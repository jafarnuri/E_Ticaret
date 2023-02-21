@extends('admin_layout.master')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürün Listeleme</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('urunekle')}}"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->
            <input type="hidden" {{$say=1}}>
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Ürün Ad</th>
                  <th>Ürün Model</th>
                  <th>Ürün Firma</th>
                  <th>Kategori ismi</th>
                  <th>Ürün Stok</th>
                  <th>Ürün Fiyat</th>
                  <th>Ürün Endirim Fiyat</th>
                  <th>Resim İşlemleri</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
           @foreach($urunler as $uruncek)
                <tr>
                 <td width="20">{{$say}}</td>
                 <td>{{$uruncek->urun_ad}}</td>
                 <td>{{$uruncek->urun_model}}</td>
                 <td>{{$uruncek->urun_firma}}</td>
                 <td>{{$uruncek->kategoriad}}</td>
                 <td>{{$uruncek->urun_stok}}</td>
                 <td>{{$uruncek->urun_fiyat}}</td>
                 <td>{{$uruncek->urun_endirimfyat}}</td>
                 <td><img  src="{{asset('dimg/urunler/'.$uruncek->urun_resm)}}" alt=""></td>
                 <td><center><a href="{{url('/urunduzenle/'.$uruncek->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-rotate-right"></i></button></a></center></td>
                 <td><center><a href="{{url('/urundelete/'.$uruncek->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>
                </tr>
                <input type="hidden" {{$say++}}>
           @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- /page content -->
@endsection