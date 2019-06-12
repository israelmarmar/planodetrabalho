<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semanal extends Model
{
    protected $table = 'semanal';

    protected $fillable = ['RotinaDefinida','Checagem','Backup','Manuntencao','Status','meta_id','datainicio','datafim','observacoes'];

    public function meta(){
        return $this->belongsTo(Meta::class);
    }

}
