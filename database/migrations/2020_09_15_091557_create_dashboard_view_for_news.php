<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDashboardViewForNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW `ds_v_news` AS 
            SELECT
                created_at,
                (SELECT count FROM (SELECT DATE_FORMAT(created_at, '%Y-%m') as created_at, count(created_at) as count FROM lzzt_news GROUP BY DATE_FORMAT(created_at, '%Y-%m')) v2 WHERE v1.created_at = v2.created_at) AS `all`,
                (SELECT count FROM (SELECT DATE_FORMAT(created_at, '%Y-%m') as created_at, flag_show, count(flag_show) as count FROM lzzt_news GROUP BY DATE_FORMAT(created_at, '%Y-%m'), flag_show) v2 WHERE v1.created_at = v2.created_at AND flag_show = 'Y') AS `show`,
                (SELECT count FROM (SELECT DATE_FORMAT(created_at, '%Y-%m') as created_at, flag_show, count(flag_show) as count FROM lzzt_news GROUP BY DATE_FORMAT(created_at, '%Y-%m'), flag_show) v2 WHERE v1.created_at = v2.created_at AND flag_show = 'N') AS `hide`
            FROM (SELECT DATE_FORMAT(created_at, '%Y-%m') as created_at, flag_show, count(flag_show) as count FROM lzzt_news GROUP BY DATE_FORMAT(created_at, '%Y-%m'), flag_show) v1
            GROUP BY created_at
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS ds_v_news");
    }
}
