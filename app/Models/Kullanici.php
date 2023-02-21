<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    use HasFactory;
    protected $table="kullanici";
    protected $fillabe=["id","kullanici_adsoyad","kullanici_tel","created_at","updated_at","kullanici_mail"];
}
