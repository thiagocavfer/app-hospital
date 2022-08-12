<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $table = 'hospitais';
    protected $fillable= [
        'nome',
        'instituicao',
        'id_endereco',
        'telefone',
        'email'
    ];

}
//$h = Hospital::create(['nome'=>'Hospital da Posse', 'instituicao'=>'publica', 'id_endereco'=>'2', 'telefone'=>'(21) 4444-4444', 'email'=>'hospt.sep@email.com']);
