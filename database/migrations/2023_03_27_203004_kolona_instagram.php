<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KolonaInstagram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bends', function (Blueprint $table) {
            $table->after('youtube', function ($table) {
                $table->string('instagram');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bends', function (Blueprint $table) {
            $table->dropColumn('instagram');
        });
    }
}
