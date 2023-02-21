<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kullanici;

class KullaniciController extends Controller
{
    public function kullaniciguncel($id , Request $request)
    {

        $kullanici_tel=$request->kullanici_tel;
        $kullanici_adsoyad=$request->kullanici_adsoyad;
        
        Kullanici::whereId($id)->update([
            "kullanici_tel"=>$kullanici_tel,
            "kullanici_adsoyad"=>$kullanici_adsoyad,
            
        ]); 


        return back()->with("status","Guncellenme basari ile bitmisdir");
       

    }  


    public function kullanicisil($id)
    {

         $kullanici=Kullanici::find($id);
            
         $kullanici->delete();


        return back()->with("status","Silinme islemi basari ile bitmisdir");
       

    } 

}
