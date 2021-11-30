<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',6)->unique();
            $table->foreignId('origen_id')->constrained('aeropuerto');
            $table->foreignId('destino_id')->constrained('aeropuerto');
            $table->foreignId('compania_id')->constrained('companias');
            $table->timestamp('salida');
            $table->timestamp('llegada');
            $table->decimal('plazas',3,0);
            $table->decimal('precio',8,2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
