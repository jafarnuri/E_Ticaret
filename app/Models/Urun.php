<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;
    protected $table="urun";
    protected $fillabe=["id","kategoriad","urun_ad","urun_model","urun_fiyat","urun_endirimfyat","urun_resm","urun_detay","urun_fiyat","urun_video","urun_keyword","urun_stok","created_at","updated_at"];
}
