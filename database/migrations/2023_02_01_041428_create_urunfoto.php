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
        Schema::create('urunfoto', function (Blueprint $table) {
            $table->id('urunfoto_id');
            $table->integer('urun_id');
            $table->string('urunfoto_resimyol');
            $table->integer('urunfoto_sira');
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
        Schema::dropIfExists('urunfoto');
    }
};
