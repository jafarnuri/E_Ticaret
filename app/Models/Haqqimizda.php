<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haqqimizda extends Model
{
    use HasFactory;
    protected $table="haqqimizda";
    protected $fillabe=["haqqimizda_baslik","haqqimizda_logo","haqqimizda_icerik",
    "haqqimizda_vidio","created_at","updated_at"];
}
