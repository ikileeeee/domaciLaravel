<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prognozas', function (Blueprint $table) {
            $table->id('prognozaID');
            $table->string('dan');
            $table->string('pojava');
            $table->double('temperatura', 4, 2);
            $table->foreignId('regionID');
            $table->foreignId('userID');
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
        Schema::dropIfExists('prognozas');
    }
};
