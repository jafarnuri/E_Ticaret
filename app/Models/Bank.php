<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $table="bank";
    protected $fillabe=["id","banka_ad",
    "banka_iban","banka_hesapadsoyad","created_at","updated_at"];
}
