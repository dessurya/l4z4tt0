<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lzzt_slider', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('order')->nullable();
            $table->string('button_title')->nullable();
            $table->string('button_url')->nullable();
            $table->string('flag_show')->default('Y');
            $table->string('flag_name')->default('N');
            $table->string('flag_button')->default('N');
            $table->text('picture')->nullable();
            $table->string('last_update_by')->nullable();
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
        Schema::dropIfExists('lzzt_slider');
    }
}
