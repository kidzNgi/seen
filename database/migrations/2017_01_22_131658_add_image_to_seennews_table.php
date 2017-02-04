<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageToSeennewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seennews', function (Blueprint $table) {
            //
            $table->string('image2',50)->nullable();
            $table->string('image3',50)->nullable();
            $table->string('image4',50)->nullable();
            $table->string('image5',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seennews', function (Blueprint $table) {
            //
        });
    }
}
