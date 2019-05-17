<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';

    protected $fillable = ['Atividade', 'Responsavel', 'atividade_id'];

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }

    public function diaria(){
        return $this->hasMany(Diaria::class);
    }

    public function semanal(){
        return $this->hasMany(Semanal::class);
    }

    public function mensal(){
        return $this->hasMany(Mensal::class);
    }


}
