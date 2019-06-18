<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta';

    protected $fillable = ['Atividade', 'Responsavel', 'planodetrabalho_id'];

    public function plandetrabalho(){
        return $this->belongsTo(Planodetrabalho::class);
    }

    public function diaria($datainicio){
        //return $this->hasMany(Diaria::class);
        return $this->hasMany(Diaria::class)->where('datainicio',$datainicio)->get();
    }

    public function diaria_all(){
        return $this->hasMany(Diaria::class);
        //return $this->hasMany(Diaria::class)->where('datainicio',$datainicio)->get();
    }

    public function semanal(){
        return $this->hasMany(Semanal::class);
    }

    public function mensal(){
        return $this->hasMany(Mensal::class);
    }


}
