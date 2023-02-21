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
            <h2>Menü Listeleme</h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="{{route('menuekle')}}"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Menü Ad</th>
                  <th>Menü Url</th>
                  <th>Menü Sira</th>
                  <th>Menü Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <tr>
                 <td width="20"></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td> </td>
                 <td><center><a href=""><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                 <td><center><a href=""><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>

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