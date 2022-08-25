<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'endereco_id',
        'nome',
        'sexo',
        'email',
        'telefone',
        'data_nascimento',       
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'paciente_id');
    }    
}
