<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affectation extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];
    public function user(){
        return $this->belongsTo(User::class, 'users_id');
    }
    public function module(){
        return $this->belongsTo(Modules::class, 'modules_id');
    }
    public function nv_scolaire(){
        return $this->belongsTo(NvScolaire::class, 'nv_scolaires_id');
    }

}
