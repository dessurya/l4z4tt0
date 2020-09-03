<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemitraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lzzt_kemitraan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('flag_show')->default('Y');
            $table->text('content')->nullable();
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
        Schema::dropIfExists('lzzt_kemitraan');
    }
}
