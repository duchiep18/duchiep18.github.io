<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThemSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('them_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('tensanpham');
            $table->string('thongtinsanpham')->nullable();
            $table->integer('giasanpham')->nullable();
            $table->string('anhsanpham')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('them_san_pham');
    }
}
