<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $table = 'turmas';

    protected $fillable = [
        'idschool',
        'nome',
        'classe',
        'periodo',
        'ano_letivo',
    ];
    public function school()
    {
        return $this->belongsTo(
            School::class,
            'idschool',
            'idschool'
        );
    }
}
