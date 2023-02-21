<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Haqqimizda;
use App\Models\Ayarlar;
use App\Models\Urun;
use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\Menu;
use App\Models\Yorumlar;

class ShoppingController extends Controller
{
   public function haqqimizda()
   {
      $haqqimizda=Haqqimizda::all()->first();
    return view ('shopping.haqqimizda')->with('haqqimizda',$haqqimizda);
   }

   public function iletisim(Request $request)
   {
      $ayarlar=Ayarlar::find('1');
    return view ('shopping.iletisim')->with('ayarlar',$ayarlar);
   }

   public function kategori()
   {
      $urunler=Urun::get();
      
    return view ('shopping.kategori')->with('urunler',$urunler);

   }

   public function kategorilist($id)
   {
      $kategori=Kategori::find($id);
      $urunler=Urun::where("kategoriad", '=', $kategori->kategori_ad)->get();
      
    return view ('shopping.kategorilist')->with('urunler',$urunler)->with('kategori' , $kategori);

   }



}
