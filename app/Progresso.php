<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progresso extends Model
{
    protected $table = 'progressos';

    protected $fillable = [
        'aluno_id', 'prog_html', 'prog_css', 'prog_logica', 'prog_js', 'prog_geral'
    ];
}
