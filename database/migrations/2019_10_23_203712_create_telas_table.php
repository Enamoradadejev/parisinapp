<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tela');
            $table->timestamps();
        });

        Schema::create('venta_tela', function (Blueprint $table) {

            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('tela_id');

            $table->foreign('venta_id')
                ->references('id')
                ->on('ventas')
                ->onDelete('cascade');

            $table->foreign('tela_id')
                ->references('id')
                ->on('telas')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_tela');
        Schema::dropIfExists('telas');
    }
}
