<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';

    protected $fillable = [
        'endereco_id',
        'nome',
        'sexo',
        'especialidade',
        'telefone',
        'funcionario',
        'email'        
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'medico_id');
    }
}
