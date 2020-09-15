<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardViewForInbox extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW `ds_v_inbox` AS 
            SELECT 
                DATE_FORMAT(created_at, '%Y-%m') as created_at, 
                count(created_at) as count 
            FROM lzzt_inbox 
            GROUP BY DATE_FORMAT(created_at, '%Y-%m')
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS ds_v_inbox");
    }
}
