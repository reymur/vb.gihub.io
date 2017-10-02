<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('knowledge_id1')->unsigned();
            $table->integer('knowledge_id2')->unsigned();
            $table->integer('knowledge_id3')->unsigned();
            $table->string('name',255);
            $table->foreign('knowledge_id2')->references('id')->on('knowledges');
            $table->foreign('knowledge_id1')->references('id')->on('knowledges');
            $table->foreign('knowledge_id3')->references('id')->on('knowledges');
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
        Schema::dropIfExists('specialties');
    }
}
