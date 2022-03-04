<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->decimal('costo');
            $table->unsignedBigInteger('tipo_tramite_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('clase_id');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('tipo_tramite_id')->references('id')->on('tipo_tramites');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('clase_id')->references('id')->on('clases');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('tramites');
    }
}
