<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diaria extends Model
{
    protected $table = 'diaria';

    protected $fillable = ['RotinaDefinida','Checagem','Backup','Manuntencao','Status','meta_id','datainicio','datafim','observacoes'];

    public function meta(){
        return $this->belongsTo(Meta::class);
    }


}
