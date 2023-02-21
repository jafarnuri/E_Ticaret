<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    use HasFactory;
    protected $table="ayarlar";
    protected $fillabe=["id",
    "ayar_title","ayar_logo","ayar_resim","ayar_description","ayar_keyword","ayar_author",
    "ayar_analystic","ayar_zopim","ayar_maps","ayar_tel","ayar_gsm",
    "ayar_faks","ayar_mail","ayar_ilce","ayar_il","ayar_adres",
    "ayar_mesai","ayar_facebook","ayar_twitter","ayar_google","ayar_youtube",
    "ayar_smtphost","ayar_smtpuser","ayar_smtppassword",
    "ayar_smtpport","created_at","updated_at"];
}
