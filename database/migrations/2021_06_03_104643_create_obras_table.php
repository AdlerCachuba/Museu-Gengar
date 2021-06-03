<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->integer('quantidade');
            $table->string("status",255);

            //cria a coluna de chave estrangeira
            $table->foreignId("secao_id");
            //o secao_id vai referenciar o campo id da tabela secao
            // e vai criar a fk
            $table->foreign("secao_id")->references('id')->on('secaos');
            
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
        Schema::dropIfExists('obras');
    }
}
