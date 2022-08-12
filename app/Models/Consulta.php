<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consultas';
    protected $fillable = [
        'id_paciente',
        'id_medico',
        'id_hospital',
        'data',
        'diagnostico',
    ];
}

// $c = Consulta::create(['id_paciente' => '1', 'id_medico' => '1', 'id_hospital' => '1', 'data'=>'2022-08-12 15:13:22', 'diagnostico'=>'Esse é um diagnostico']);
