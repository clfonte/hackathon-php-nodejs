<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('anoModelo');
            $table->string('anoFabricacao');
            $table->string('valor');
            $table->string('tipo');
          //  $table->string('fotodestaque');
            $table->string('descricao');
            $table->string('cor_id');
            $table->string('marca_id');
            $table->string('usuario_id');
            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
