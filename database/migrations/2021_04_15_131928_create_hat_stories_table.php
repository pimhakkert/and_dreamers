<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHatStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hat_stories', function (Blueprint $table) {
            $table->id('hat_id');
            $table->string('hat_name');
            $table->string('hat_text');
            $table->string('hat_image');
            $table->string('hat_size');
            $table->string('hat_color');
            $table->string('hat_material');
            $table->string('hat_pageone_text');
            $table->string('hat_pageone_image');
            $table->string('hat_pagetwo_text');
            $table->string('hat_pagetwo_imageone');
            $table->string('hat_pagetwo_imagetwo');
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
        Schema::dropIfExists('hat_stories');
    }
}
