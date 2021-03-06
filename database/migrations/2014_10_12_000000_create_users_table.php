<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_media')->nullable();
            $table->integer('id_skpd')->nullable();
            $table->string('nm_user');
            $table->string('alamat')->nullable();
            $table->string('kontak')->nullable();
            $table->string('email')->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->boolean('lock')->default(false);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_user');
    }
}
