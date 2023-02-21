<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table="slider";
    protected $fillabe=["id","slider_ad",
    "slider_resimyol","slider_sira","slider_link","created_at","updated_at"];
}
