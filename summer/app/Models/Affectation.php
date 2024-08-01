<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affectation extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Modules(){
        return $this->belongsTo(Modules::class);
    }
    public function NvScolaire(){
        return $this->belongsTo(NvScolaire::class);
    }

}
