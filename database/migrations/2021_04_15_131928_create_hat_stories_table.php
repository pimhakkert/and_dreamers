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
            $table->string('hat_cover_title');
            $table->string('hat_pageone_title');
            $table->string('hat_pagetwo_title');
            $table->string('hat_contact_title');
            $table->string('hat_cover_text');
            $table->string('hat_pageone_text');
            $table->string('hat_pagetwo_text');
            $table->string('hat_contact_text');
            $table->string('hat_pageone_heading');
            $table->string('hat_pagetwo_heading');
            $table->string('hat_cover_image');
            $table->string('hat_pageone_image');
            $table->string('hat_pagetwo_image');
            $table->string('hat_contact_name');
            $table->string('hat_contact_phone');
            $table->string('hat_contact_email');
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