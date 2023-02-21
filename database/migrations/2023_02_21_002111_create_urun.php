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
        Schema::create('urun', function (Blueprint $table) {
            $table->id();
            $table->string('kategoriad');
            $table->string('urun_ad');
            $table->string('urun_model');
            $table->string('urun_firma');
            $table->string('urun_resm');
            $table->text('urun_detay');
            $table->float('urun_endirimfyat');
            $table->float('urun_fiyat');
            $table->string('urun_video');
            $table->string('urun_keyword');
            $table->integer('urun_stok');
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
        Schema::dropIfExists('urun');
    }
};
