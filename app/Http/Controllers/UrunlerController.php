<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Urun;
use App\Models\Kategori;

class UrunlerController extends Controller
{
    public function urunler(Request $request)
    {

$imagename='';
if($image=$request->file('urun_resm')){
    $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
    $image->move('dimg/urunler',$imagename);

}
$kategori=Kategori::get();
$Urun =new Urun();
$Urun ->urun_ad= $request->input('urun_ad');
$Urun ->urun_model= $request->input('urun_model');
$Urun ->urun_firma= $request->input('urun_firma');
$Urun ->kategoriad= $request->input('kategoriad');
$Urun ->urun_detay= $request->input('urun_detay');
$Urun ->urun_endirimfyat= $request->input('urun_endirimfyat');
$Urun ->urun_fiyat= $request->input('urun_fiyat');
$Urun ->urun_video= $request->input('urun_video');
$Urun ->urun_keyword= $request->input('urun_keyword');
$Urun ->urun_stok= $request->input('urun_stok');
$Urun ->urun_resm= $imagename;
$Urun->save();
    
         return back()->with("status","Kayt basari ile bitmisdir");
        
    }



    public function urunduzenle($id , Request $request)
    {
      
        $urun=Urun::find($id);
        $urun ->urun_ad= $request->input('urun_ad');
        $urun ->urun_model= $request->input('urun_model');
        $urun ->urun_firma= $request->input('urun_firma');
        $urun ->kategoriad= $request->input('kategoriad');
        $urun ->urun_detay= $request->input('urun_detay');
        $urun ->urun_endirimfyat= $request->input('urun_endirimfyat');
        $urun ->urun_fiyat= $request->input('urun_fiyat');
        $urun ->urun_video= $request->input('urun_video');
        $urun ->urun_keyword= $request->input('urun_keyword');
        $urun ->urun_stok= $request->input('urun_stok');
        if($request->hasfile('urun_resm'))
        {
           $deleteOldImage='dimg/urunler/'.$urun->urun_resm;
           if(File::exists($deleteOldImage))
          {
            File::delete($deleteOldImage);
          }
          $image=$request->file('urun_resm');
          $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
          $image->move('dimg/urunler',$imagename);
          $urun ->urun_resm = $imagename;

        }
        
        $urun->update();
    
         return back()->with("status","Guncellenme basari ile bitmisdir");
        
    }

    public function urunsil($id)
    {

         $urun=Urun::find($id);
         $deleteOldImage='dimg/urunler/'.$urun->urun_resm;
         if(File::exists($deleteOldImage))
        {
          File::delete($deleteOldImage);
        }
         $urun->delete();


        return back()->with("status","Silinme islemi basari ile bitmisdir");
       

    } 

    public function urundetay($id)
    {
      $urunler=Urun::find($id);
      return view('shopping.urun-detay')->with('urunler',$urunler);
    }
    
}
