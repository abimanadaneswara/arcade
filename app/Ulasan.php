<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan';
    protected $primaryKey = 'id_ulasan';
    protected $fillable = ['nama','pekerjaan','desc_ulasan'];

    
}
