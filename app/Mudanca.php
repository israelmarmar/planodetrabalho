<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mudanca extends Model
{
    protected $table = 'mudanca';
    
    protected $fillable = ['Customizacao','Implantacao_processo','Acompanhamento','atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
