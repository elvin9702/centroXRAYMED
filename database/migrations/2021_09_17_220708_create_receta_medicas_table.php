<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_medicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consulta_gral_id');
            $table->text('descripcion');
            $table->date('fecha');
            $table->foreign('consulta_gral_id')->references('id')->on('consulta_grals');
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
        Schema::dropIfExists('receta_medicas');
    }
}
