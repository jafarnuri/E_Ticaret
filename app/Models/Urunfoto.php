<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunfoto extends Model
{
    use HasFactory;
    protected $table="urunfoto";
    protected $fillabe=["id","urun_id",
    "urunfoto_resimyol","urunfoto_sira","created_at","updated_at"];
}
