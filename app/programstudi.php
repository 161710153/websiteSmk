<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programstudi extends Model
{
    protected $table ='programstudis';
    protected $fillable = ['nama_program','fasilitas_id','industris_id','strukturs_id'];
    public $timestamps = true;
}
