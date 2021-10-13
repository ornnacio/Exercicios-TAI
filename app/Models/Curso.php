<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = ['nome', 'abreviatura', 'data_inicio', 'data_fim'];

    public function turmas(){
        return $this->hasMany(Turma::class, 'curso_id', 'id');
    }
}
