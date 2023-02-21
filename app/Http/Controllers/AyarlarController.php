<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use Illuminate\Support\Facades\File;

class AyarlarController extends Controller
{
  
    public function genelayarguncel(Request $request)
    {
        $ayarlar=Ayarlar::find('1');
        $ayarlar->ayar_title= $request->input('ayar_title');
        $ayarlar->ayar_description= $request->input('ayar_description');
        $ayarlar->ayar_keyword= $request->input('ayar_keyword');
        $ayarlar->ayar_author= $request->input('ayar_author');
        $ayarlar->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }

    public function iletisimayarguncel(Request $request)
    {
        $ayarlar=Ayarlar::find('1');
        $ayarlar->ayar_tel= $request->input('ayar_tel');
        $ayarlar->ayar_gsm= $request->input('ayar_gsm');
        $ayarlar->ayar_faks= $request->input('ayar_faks');
        $ayarlar->ayar_mail= $request->input('ayar_mail');
        $ayarlar->ayar_ilce= $request->input('ayar_ilce');
        $ayarlar->ayar_il= $request->input('ayar_il');
        $ayarlar->ayar_adres= $request->input('ayar_adres');
        $ayarlar->ayar_mesai= $request->input('ayar_mesai');
        $ayarlar->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }

    public function apiayarguncel(Request $request)
    {
        $ayarlar=Ayarlar::find('1');
        $ayarlar->ayar_maps= $request->input('ayar_maps');
        $ayarlar->ayar_analystic= $request->input('ayar_analystic');
        $ayarlar->ayar_zopim= $request->input('ayar_zopim');
        $ayarlar->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }

    public function sosialayarguncel(Request $request)
    {
        $ayarlar=Ayarlar::find('1');
        $ayarlar->ayar_facebook= $request->input('ayar_facebook');
        $ayarlar->ayar_twitter= $request->input('ayar_twitter');
        $ayarlar->ayar_google= $request->input('ayar_google');
        $ayarlar->ayar_youtube= $request->input('ayar_youtube');
        $ayarlar->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }

    public function smtpayarguncel(Request $request)
    {
        $ayarlar=Ayarlar::find('1');
        $ayarlar->ayar_smtphost= $request->input('ayar_smtphost');
        $ayarlar->ayar_smtpuser= $request->input('ayar_smtpuser');
        $ayarlar->ayar_smtppassword= $request->input('ayar_smtppassword');
        $ayarlar->ayar_smtpport= $request->input('ayar_smtpport');
        $ayarlar->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }


    public function logoguncel(Request $request)
    {
            $ayarlar=Ayarlar::find('1');
            if($request->hasfile('ayar_logo'))
            {
               $deleteOldImage='dimg/logo/'.$ayarlar->ayar_logo;
               if(File::exists($deleteOldImage))
              {
                File::delete($deleteOldImage);
              }
              $image=$request->file('ayar_logo');
              $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
              $image->move('dimg/logo',$imagename);
              $ayarlar ->ayar_logo = $imagename;
    
            }
            
            $ayarlar->update();
            
          return back()->with("status","Guncellenme basari ile bitmisdir");
       

    }

    public function resimguncel(Request $request)
    { 
 
        $ayarlar=Ayarlar::find('1');
            if($request->hasfile('ayar_resim'))
            {
               $deleteOldImage='dimg/resim/'.$ayarlar->ayar_resim;
               if(File::exists($deleteOldImage))
              {
                File::delete($deleteOldImage);
              }
              $image=$request->file('ayar_resim');
              $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
              $image->move('dimg/resim',$imagename);
              $ayarlar ->ayar_resim = $imagename;
    
            }
            
            $ayarlar->update();
            
        return back()->with("status","Guncellenme basari ile bitmisdir");
       

    }
}
