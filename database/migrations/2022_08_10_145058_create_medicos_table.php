<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('endereco_id');
            $table->string('nome', 30);
            $table->char('sexo', 1);
            $table->string('especialidade', 150);
            $table->enum('funcionario', ['S', 'N']);
            
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->unique('endereco_id');

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
        Schema::dropIfExists('medicos');
    }
}
