<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemSanPham extends Migration
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
            $table->string('tensanpham')->notnullable();
            $table->integer('categories_prd_id')->nullable();
            $table->text('thongtinsanpham')->nullable();
            $table->integer('giasanpham')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('trang_thai')->default(1);
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
        Schema::dropIfExists('them_san_pham');
    }
}
