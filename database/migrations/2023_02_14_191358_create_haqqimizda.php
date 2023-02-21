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
        Schema::create('haqqimizda', function (Blueprint $table) {
            $table->id();
            $table->string('haqqimizda_baslik');
            $table->text('haqqimizda_icerik');
            $table->string('haqqimizda_logo');
            $table->string('haqqimizda_vidio');
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
        Schema::dropIfExists('haqqimizda');
    }
};
