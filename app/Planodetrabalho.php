<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planodetrabalho extends Model
{
    protected $table = 'planodetrabalho';

    protected $fillable = ['NomePlano'];

    public function atividade(){
        return $this->hasMany(Atividade::class);
    }

    public function meta(){
        return $this->hasMany(Meta::class);
    }

}
