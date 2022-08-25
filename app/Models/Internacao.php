<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internacao extends Model
{
    use HasFactory;

    protected $table = 'internacoes';
    
    protected $fillable = [
        'id_consulta',
        'entrada',
        'quarto',
        'saida',
        'observacoes'        
    ];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}
