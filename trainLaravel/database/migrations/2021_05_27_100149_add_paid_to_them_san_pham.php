<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToThemSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('them_san_pham', function (Blueprint $table) {
            $table->integer('categories_prd_id')->after('tensanpham')->nullalbe();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('them_san_pham', function (Blueprint $table) {
                
        });
    }
}
