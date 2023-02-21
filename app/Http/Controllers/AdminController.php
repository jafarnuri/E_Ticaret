<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayarlar;
use App\Models\Haqqimizda;
use App\Models\Kullanici;
use App\Models\Bank;
use App\Models\Urun;
use App\Models\Urunfoto;
use App\Models\Slider;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Yorumlar;


class AdminController extends Controller
{
    public function genelayar(){

        $ayarlar=Ayarlar::all()->first();
       


        return view ('admin.genel-ayar')->with('ayarlar',$ayarlar);
    }

    public function apiayar(){

        $ayarlar=Ayarlar::all()->first();

        return view ('admin.api-ayar')->with('ayarlar',$ayarlar);
    }

    public function haqqimizdayar(){

        $haqqimizda=Haqqimizda::all()->first();

        return view ('admin.haqqimizda-ayar')->with('haqqimizda',$haqqimizda);
    }

    public function iletisimayar(){

        $ayarlar=Ayarlar::all()->first();

        return view ('admin.iletisim-ayar')->with('ayarlar',$ayarlar);
    }

    public function kullaniciayar(){

        $kullanici=Kullanici::get();

        return view ('admin.kullanici-ayar')->with('kullanici',$kullanici);
    }

    public function smtpayar(){

        $ayarlar=Ayarlar::all()->first();

        return view ('admin.smtp-ayar')->with('ayarlar',$ayarlar);

    }

    public function sosialayar(){

        $ayarlar=Ayarlar::all()->first();

        return view ('admin.sosial-ayar')->with('ayarlar',$ayarlar);
    }

    public function kullaniciduzenle($id){
        $kullanici=Kullanici::find($id);
        

        return view ('admin.kullanici-duzenle')->with('kullanici',$kullanici);
    }

    public function bankaduzenle($id)
    {
        $banka=Bank::find($id);
        return view ('admin.banka-duzenle')->with('banka',$banka);
    }

    public function bankaekle()
    {
        return view ('admin.banka-ekle');
    }

    public function banka()
    { 
        $banka=Bank::get();

        return view ('admin.banka')->with('banka',$banka);
       
    }

    public function katagoriduzenle($id)
    {
        $kategori=Kategori::find($id);
        return view ('admin.kategori-duzenle')->with('kategori',$kategori);
    }

    public function katagoriekle()
    {
        return view ('admin.kategori-ekle');
    }

    public function katagori()
    {
        $kategori=Kategori::get();
        return view ('admin.kategori')->with('kategori',$kategori);
    }

    public function menuduzenle()
    {
        return view ('admin.menu-duzenle');
    }

    public function menuekle()
    {
        return view ('admin.menu-ekle');
    }

    public function menu()
    {
        return view ('admin.menu');
    }

    public function sliderduzenle()
    {
        return view ('admin.slider-duzenle');
    }

    public function sliderekle()
    {
        return view ('admin.slider-ekle');
    }

    public function slider()
    {
        return view ('admin.slider');
    }

    public function urunduzenle($id)
    {
        $urunler=Urun::find($id);
        $kategori=Kategori::get();
        return view ('admin.urun-duzenle')->with('urunler', $urunler)->with('kategori', $kategori);
    }

    public function urunekle()
    {
        $kategori=Kategori::get();
        
        return view ('admin.urun-ekle')->with('kategori',$kategori);
    }

    public function urunfotoyukle()
    {
        return view ('admin.urun-fotoyukle');
    }

    public function urungalari()
    {
        return view ('admin.urun-galeri');
    }


    public function urun()

    {
        $urunler=Urun::get();
        return view ('admin.urun')->with('urunler',$urunler);
    }

    public function yorum()
    {
        return view ('admin.yorum');
    }
}
