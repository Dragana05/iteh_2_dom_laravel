<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNastupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nastups', function (Blueprint $table) {
            $table->id();
            $table->string('datum');
            $table->string('lokal');
            $table->integer('cenaKarte');
            $table->foreignId('bend_id')->constrained('bends');
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
        Schema::dropIfExists('nastups');
    }
}
