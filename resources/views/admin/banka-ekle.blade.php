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
            <h2>Banka Ekleme</h2>
           
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            @if(Session::has("status"))
                        <br>
                        <div class="alert alert-success">
                          {{Session::get('status')}}

                        </div>
                     @endif
            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
            <form action="{{route('bankkaydet')}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            @csrf
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Ad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_ad" placeholder="Banka adını giriniz" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka IBAN <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_iban" placeholder="Banka IBAN giriniz" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banka Hesap Ad Soyad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="banka_hesapadsoyad" placeholder="Ad Soyad Giriniz" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

             <div class="ln_solid"></div>
             <div class="form-group">
              <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" name="bankaekle" class="btn btn-success">Kaydet</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!-- /page content -->
@endsection