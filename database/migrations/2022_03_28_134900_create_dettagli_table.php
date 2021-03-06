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
        Schema::create('dettagli', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->integer('proprietari');
            $table->string('cambio');
            $table->string('vernice');
            $table->string('rivestimenti');
            $table->integer('posti');
            $table->integer('porte');
            $table->text('consumi');
            $table->text('emissioni');
            $table->text('equipaggiamento');
            $table->primary('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dettagli');
    }
};
