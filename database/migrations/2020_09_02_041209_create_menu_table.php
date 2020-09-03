<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lzzt_menu', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('menu')->nullable();
            $table->string('flag_show')->default('Y');
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
        Schema::dropIfExists('lzzt_menu');
    }
}
