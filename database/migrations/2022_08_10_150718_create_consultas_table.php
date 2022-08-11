<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->unique('id_paciente');

            $table->unsignedBigInteger('id_medico');
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->unique('id_medico');

            $table->unsignedBigInteger('id_hospital');
            $table->foreign('id_hospital')->references('id')->on('hospitais');
            $table->unique('id_hospital');

            $table->dateTime('data');
            $table->text('diagnostico');
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
        Schema::table('consultas', function (Blueprint $table){
            $table->dropForeign('consultas_id_paciente_foreign');
            $table->dropForeign('consultas_id_medico_foreign');
            $table->dropForeign('consultas_id_hospital_foreign');
            $table->dropColumn(['id_paciente', 'id_medico', 'id_hospital']);
        });

        Schema::dropIfExists('consultas');
    }
}
