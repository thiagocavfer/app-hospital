<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospitais';

    protected $fillable= [
        'id_endereco',
        'nome',
        'instituicao',        
        'telefone',
        'email'
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class, 'hospital_id');
    }

}



