<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('cognome', 50);
            $table->string('email', 50);
            $table->string('compagnia_di_volo', 50);
            $table->string('luogo_partenza', 50);
            $table->string('luogo_destinazione', 50);
            $table->date('data_partenza');
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
        Schema::dropIfExists('trips');
    }
}
