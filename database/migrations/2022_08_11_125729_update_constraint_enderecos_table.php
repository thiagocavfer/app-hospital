<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateConstraintEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('enderecos', function (Blueprint $table){
            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->unique('id_paciente');

            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->unique('id_medico');

            $table->unsignedBigInteger('id_hospital');
            $table->foreign('id_hospital')->references('id')->on('hospitais');
            $table->unique('id_hospital');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('enderecos', function (Blueprint $table){
            $table->dropForeign('enderecos_id_paciente_foreign');
            $table->dropColumn('id_paciente');

            $table->dropForeign('enderecos_id_medico_foreign');
            $table->dropColumn('id_medico');

            $table->dropForeign('enderecos_id_hospital_foreign');
            $table->dropColumn('id_hospital');
        });*/
    }
}
