<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problema extends Model
{
    protected $table = 'problema';

    protected $fillable = ['Redistribuicao','Customizacao','Solucao','Implantacao_solucao','Status','atividade','id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
