<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnInPostServeListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('port_service_lists', function (Blueprint $table) {
            $table->string('demo_one')->nullable();
            $table->string('demo_two')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('port_service_lists', function (Blueprint $table) {
             $table->dropColumn(['demo_one','demo_two']);
        });
    }
}
