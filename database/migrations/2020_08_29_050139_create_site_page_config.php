<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitePageConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lzzt_site_page_config', function (Blueprint $table) {
            $table->id();
            $table->string('identity');
            $table->string('name');
            $table->string('route')->nullable();
            $table->string('flag_show')->default('Y');
            $table->string('last_update_by')->nullable();
            $table->text('config');
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
        Schema::dropIfExists('lzzt_site_page_config');
    }
}
