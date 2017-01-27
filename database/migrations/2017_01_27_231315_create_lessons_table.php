<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->boolean('free')->default(false);
            $table->string('video');
            $table->string('title');
            $table->text('description');
            $table->text('seo_description');
            $table->text('transcript');
            $table->integer('position');
            $table->integer('seconds');
            $table->integer('series_id');
            $table->string('open_graph_image')->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
