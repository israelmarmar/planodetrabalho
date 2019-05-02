<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';

    protected $fillable = ['Atividade', 'Responsavel', 'idAtividade'];

    public $timestamps = false;

    public function atividade(){
        return $this->belongsTo(Atividade::class);
    }
}
