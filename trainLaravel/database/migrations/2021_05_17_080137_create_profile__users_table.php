<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile__users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('id_code')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('gender')->default(1);
            $table->string('image')->nullable();
            $table->integer('id_user');
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
        Schema::dropIfExists('profile__users');
    }
}
