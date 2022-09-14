<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlocacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacoes', function (Blueprint $table) {
            $table->foreignId('desenvolvedor_id');
            $table->foreign('desenvolvedor_id')->references('id')->on('desenvolvedores');
            $table->foreignId('projeto_id');
            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->integer('horas_semanais');
            $table->softDeletes();
            $table->timestamps();
            $table->primary(['projeto_id', 'desenvolvedor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alocacoes');
    }
}
