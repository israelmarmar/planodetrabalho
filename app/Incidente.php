<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    protected $table = 'incidente';

    protected $fillable = ['Causa','Tempo','Solucao','Implantacao_solucao','Status','atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
