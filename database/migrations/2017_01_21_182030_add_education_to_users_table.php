<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEducationToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('education')->nullable();
            $table->string('image')->nullable();
            $table->string('tel')->nullable();
            $table->string('research_gate')->nullable();
            $table->string('tel_in')->nullable();
            $table->string('first_name_eng')->nullable();
            $table->string('last_name_eng')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
