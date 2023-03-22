<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table="respuestas_encuesta";
    protected $fillable =[

        'entidad',
        'servicio',
        'no_encuesta',
        'documento_identidad',
        'pregunta_1',
        'pregunta_2',
        'pregunta_3',
        'pregunta_4',
        'pregunta_5',
        'pregunta_6',
        'pregunta_7',
        'pregunta_8',
        'pregunta_9',
        'pregunta_10',
        
        
        ];

}
