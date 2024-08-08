<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiants extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];

    public function nv_scolaires(){
        return $this->belongsTo(NvScolaire::class);
    }
    public function Notes(){
        return $this->hasMany(Notes::class);
    }
}
