<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{

    protected $table = 'operacao';

    protected $fillable = ['Procedimentos','Implementacao','Dados','atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
