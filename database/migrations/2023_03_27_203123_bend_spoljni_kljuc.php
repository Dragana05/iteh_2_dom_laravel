<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BendSpoljniKljuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pevacs', function (Blueprint $table) {
            $table->after('zanr', function ($table) {
                $table->foreignId('bend_id')->constrained('bends');
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
        Schema::table('pevacs', function (Blueprint $table) {
            //
        });
    }
}
