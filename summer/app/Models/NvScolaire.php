<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NvScolaire extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function Etudiants(){
        return $this->hasMany(Etudiants::class);
    }
    public function Emploie(){
        return $this->hasMany(Emploie::class);
    }
    public function Affectation(){
        return $this->hasMany(Affectation::class,'nv_scolaires_id');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'nv_scolaires_id');
    }
}
