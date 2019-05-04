<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensal extends Model
{
    protected $table = 'mensal';

    protected $fillable = ['Relatorios', 'Reunioes', 'Status','meta_id'];

    public function meta(){
        return $this->belongsTo(Meta::class);
    }
}
