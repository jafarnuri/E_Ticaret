@extends('admin_layout.master')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST" >
            <div class="input-group">
              <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="arama">Ara!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Resim Ürün Fotoğraf İşlemleri</h2><br>
              </div>
              <form  action="../netting/islem.php" method="POST" enctype="multipart/form-data">

              <input type="hidden" name="urun_id" value="">

                <div align="right" class="col-md-6">
                  <button type="submit" name="urunfotosil"  class="btn btn-danger "><i class="fa fa-trash" aria-hidden="true"></i> Seçilenleri Sil</button>
                  <a class="btn btn-success" href=""><i class="fa fa-plus" aria-hidden="true"></i> Ürün Fotoğraf Yükle</a>
                </div>
                <div class="clearfix"></div>
              </div>


              <div class="x_content">



                  <div class="col-md-55">
                   <label>
                    <div class="image view view-first">
                      <img style="width: 250px; height: 100px; display: block;" src="../../" alt="image" />
                      <div class="mask">
                        <p></p>
                        <div class="tools tools-bottom">

                          <!--<a href="#"><i class="fa fa-times"></i></a>-->

                        </div>

                      </div>

                    </div>

                    <input type="checkbox" name="urunfotosec[]"  value="" > Seç
                  </label>
                </div>

                <div align="right" class="col-md-12">
                  <ul class="pagination">

                      <li class="active">

                        <a href=""></a>

                      </li>
                      <li>

                        <a href=""></a>

                      </li>

                  </ul>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection