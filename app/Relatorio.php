<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    protected $table = 'relatorio';

    protected $fillable = ['Nome_cadastrador','N_processo','Horario_ocorrido','Tempo_execucao','Hora_inicio','atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
