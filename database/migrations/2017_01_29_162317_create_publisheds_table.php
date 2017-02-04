<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisheds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_portfolio');
            $table->string('author_combined');
            $table->string('article_name');
            $table->string('conference_journal');
            $table->string('year_published',4);
            $table->integer('vol_published');
            $table->string('publication_duties');
            $table->string('published_link');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('no action')->onDelete('cascade');
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
        Schema::dropIfExists('Publisheds');
    }
}
