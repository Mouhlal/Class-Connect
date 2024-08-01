<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modules extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function Etudiants(){
        return $this->hasMany(Notes::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Emploie(){
        return $this->hasMany(Emploie::class);
    }
}
