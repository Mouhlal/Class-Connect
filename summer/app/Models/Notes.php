<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notes extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [] ;

    public function Etudiants(){
        return $this->belongsTo(Etudiants::class);
    }
    public function Modules(){
        return $this->belongsTo(Modules::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
