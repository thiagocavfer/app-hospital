<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPacientesHospitaisMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table){
            $table->string('telefone', 15)->after('email');
        });

        Schema::table('medicos', function (Blueprint $table){
            $table->string('telefone', 15)->after('especialidade');
            $table->string('email', 80)->after('especialidade');
        });

        Schema::table('hospitais', function (Blueprint $table){
            $table->string('telefone', 15)->after('instituicao');
            $table->string('email', 80)->after('instituicao');
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
            $table->dropColumn('telefone');
        });

        Schema::table('medicos', function (Blueprint $table){
            $table->dropColumn(['telefone', 'email']);
        });

        Schema::table('hospitais', function (Blueprint $table){
            $table->dropColumn('telefone');
        });
    }
}
