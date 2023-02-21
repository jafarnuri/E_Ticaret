@extends('admin_layout.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
                 <div class="x_title">
                    <h2>Kullanici <small>listeleme</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                 
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
               
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                     
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Kayit tarih</th>
                          <th>Ad Soyad</th>
                          <th>Mail Adres</th>
                          <th>Telefon</th>
                          <th class="text-center">Duzenle</th>
                          <th class="text-center">Sil</th>
                        </tr>
                      </thead>


                      <tbody>

                       @foreach($kullanici as $kullanicicek)

                       <tr>
                          <td>{{$kullanicicek->created_at}}</td>
                          <td>{{$kullanicicek->kullanici_adsoyad}}</td>
                          <td>{{$kullanicicek->kullanici_mail}}</td>
                          <td>{{$kullanicicek->kullanici_tel}}</td>
                          <td><center><a href="{{url('/kullaniciduzenlee/'.$kullanicicek->id)}}"><button  class="btn btn-primary btn-xs"><i class="fa fa-rotate-right"></i></button></a></center></td>
                          <td><center><a href="{{url('/kullanicidelete/'.$kullanicicek->id)}}"><button  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a></center></td>                      
                        </tr>

                       @endforeach
                      
                      </tbody>
                    </table>
                  </div> 
                </div>
              </div>

              <!-- Bitiyor -->

        
              
            </div>
          </div>
        </div>
@endsection