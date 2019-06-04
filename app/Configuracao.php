<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracao';

    protected $fillable = ['Implementacao_ferramentas','Levantamento_ativos','Cadastro_ferramenta','Implementacao_processo','Acompanhamento','atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }

}
