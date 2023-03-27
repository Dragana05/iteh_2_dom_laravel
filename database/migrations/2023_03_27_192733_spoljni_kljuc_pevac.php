<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpoljniKljucPevac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bends', function (Blueprint $table) {
            $table->after('instagram', function ($table) {
                $table->foreignId('pevac_id')->constrained('pevacs');
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
            //
        });
    }
}
