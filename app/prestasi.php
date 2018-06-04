<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    protected $table ='prestasis';
    protected $fillable = ['nama','tgl_peroleh'];
    public $timestamps = true;

    public function ekskul(){
        return $this->hasmany('App\ekskul','prestasis_id');
    }
}