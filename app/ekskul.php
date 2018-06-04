<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekskul extends Model
{
    protected $table ='ekskuls';
    protected $fillable = ['nama','jadwal','prestasis_id'];
    public $timestamps = true;

    public function prestasi(){
        return $this->belongsTo('App\prestasi','prestasis_id');
    }
}