<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lzzt_news', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('introduction')->nullable();
            $table->text('content')->nullable();
            $table->text('banner')->nullable();
            $table->text('picture')->nullable();
            $table->string('slug')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_content')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('flag_show')->default('Y');
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
        Schema::dropIfExists('lzzt_news');
    }
}
