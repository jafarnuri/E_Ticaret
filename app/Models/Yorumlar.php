<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yorumlar extends Model
{
    use HasFactory;
    protected $table="yorumlar";
    protected $fillabe=["id","kullanici_id",
    "urun_id","yorum_detay","yorum_onay","created_at",
    "updated_at"];
}
