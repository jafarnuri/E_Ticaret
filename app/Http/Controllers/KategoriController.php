<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategorikaydet(Request $request)
    {
        $kategori = new Kategori();
        $kategori ->kategori_ad= $request->input('kategori_ad');
        $kategori->save();
        
         return back()->with("status","Kayt basari ile bitmisdir");
        
    }

    public function kategoriduzenle($id , Request $request)
    {
        $kategori=Kategori::find($id);
        $kategori->kategori_ad= $request->input('kategori_ad');
        $kategori->update();
        
         return back()->with("status","Guncelleme basari ile bitmisdir");
        
    }

    public function kategorisil($id)
    {

         $kategori=Kategori::find($id);
            
         $kategori->delete();


        return back()->with("status","Silinme islemi basari ile bitmisdir");
       

    } 
}
