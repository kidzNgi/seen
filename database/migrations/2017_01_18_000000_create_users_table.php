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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',60);
            $table->string('email',120);
            $table->string('password', 60);
            $table->string('first_name', 60);
            $table->string('last_name', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('privileges_id')->unsigned();
            $table->foreign('privileges_id')->references('id')->on('privileges')->onUpdate('no action')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
