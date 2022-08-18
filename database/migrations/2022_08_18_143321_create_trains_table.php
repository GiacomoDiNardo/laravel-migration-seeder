<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 50);
            $table->string("stazione_partenza", 50);
            $table->string("stazione_arrivo", 50);
            $table->string("orario_partenza");
            $table->string("orario_arrivo");
            $table->smallInteger("codice_treno");
            $table->smallInteger("num_carrozze")->nullable();
            $table->boolean("puntuale")->default(true)->nullable();
            $table->boolean("cancellato")->default(false)->nullable();
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
        Schema::dropIfExists('trains');
    }
}
