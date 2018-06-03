<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table ='fasilitas';
    protected $fillable = ['nama','jumlah','ket'];
    public $timestamps = true;
}
