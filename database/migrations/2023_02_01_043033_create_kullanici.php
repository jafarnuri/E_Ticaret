<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici', function (Blueprint $table) {
            $table->id('kullanici_id');
            $table->string('kullanici_adsoyad');
            $table->string('kullanici_resim');
            $table->string('kullanici_mail');
            $table->string('kullanici_tel');
            $table->string('kullanici_tc');
            $table->string('kullanici_ad');
            $table->string('kullanici_gsm');
            $table->string('kullanici_adres');
            $table->string('kullanici_il');
            $table->string('kullanici_ilce');
            $table->string('kullanici_yetki');
            $table->string('kullanici_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
};
