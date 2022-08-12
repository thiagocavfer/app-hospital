<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';
    protected $fillable = [
        'nome',
        'sexo',
        'especialidade',
        'telefone',
        'funcionario',
        'email',
        'id_endereco'
    ];
}
//['nome'=>'','sexo'=>'','especialidade'=>'','telefone'=>'','funcionario'=>'','email'=>'','id_endereco'=>''];
