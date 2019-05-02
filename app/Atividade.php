<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $table = 'atividade';

    protected $fillable = ['NomeProcesso'];

    public $timestamps = false;

    public function meta(){
        return $this->hasMany(Meta::class);
    }
}
