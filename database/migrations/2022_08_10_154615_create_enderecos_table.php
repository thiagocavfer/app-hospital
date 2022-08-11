<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('logradouro', 100);
            $table->string('numero', 4)->default('s/n');
            $table->string('complemento', 20)->nullable();
            $table->string('cep', 10);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->char('uf', 2);
            $table->timestamps();
        });


        Schema::table('pacientes', function (Blueprint $table){
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos');
            $table->unique('id_endereco');
        });

        Schema::table('medicos', function (Blueprint $table){
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos');
            $table->unique('id_endereco');
        });

        Schema::table('hospitais', function (Blueprint $table){
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos');
            $table->unique('id_endereco');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table){
            $table->dropForeign('pacientes_id_endereco_foreign');
            $table->dropColumn('id_endereco');
        });

        Schema::table('medicos', function (Blueprint $table){
            $table->dropForeign('medicos_id_endereco_foreign');
            $table->dropColumn('id_endereco');
        });

        Schema::table('hospitais', function (Blueprint $table){
            $table->dropForeign('hospitais_id_enderecos_foreign');
            $table->dropColumn('id_endereco');
        });

        Schema::dropIfExists('enderecos');
    }
}
