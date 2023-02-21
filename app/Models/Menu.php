<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table="menu";
    protected $fillabe=["id","menu_ust",
    "menu_ad","menu_detay","menu_url","menu_sira","menu_seourl","created_at","updated_at"];
}
