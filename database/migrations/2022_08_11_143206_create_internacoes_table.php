<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internacoes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('entrada');
            $table->integer('quarto');
            $table->dateTime('saida');
            $table->text('observacoes');
            $table->timestamps();
        });

        Schema::table('internacoes', function (Blueprint $table){
            $table->unsignedBigInteger('id_consulta');
            $table->foreign('id_consulta')->references('id')->on('consultas');
            $table->unique('id_consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('internacoes', function (Blueprint $table){
            $table->dropForeign('internacoes_id_consulta_foreign');
            $table->dropColumn('id_consulta');
        });

        Schema::dropIfExists('internacoes');
    }
}
