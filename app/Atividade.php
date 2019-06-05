<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $table = 'atividade';

    protected $fillable = ['NomeProcesso','planodetrabalho_id'];

    public function planodetrabalho(){
        return $this->belongsTo(Planodetrabalho::class);
    }

    public function meta(){
        return $this->hasMany(Meta::class);
    }

    public function relatorio(){
        return $this->hasMany(Relatorio::class);
    }

    public function incidente(){
        return $this->hasMany(Incidente::class);
    }
}
