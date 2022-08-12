<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internacao extends Model
{
    use HasFactory;

    protected $table = 'internacoes';
    protected $fillable = [
        'entrada',
        'quarto',
        'saida',
        'observacoes',
        'id_consulta'
    ];
}
//$i = Internacao::create(['entrada' => '2022-08-13 12:30:00', 'quarto'=>'43', 'saida'=>'2022-08-25 14:30:25', 'observacoes'=>'Essa é uma observação', 'id_consulta'=>'1']);
