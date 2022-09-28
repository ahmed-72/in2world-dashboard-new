<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RoleUser extends Model
{
    use HasFactory;


    protected $primaryKey = ['role_id', 'user_id'];

    protected $guarded =[];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }    
    public function role(){
        return $this->belongsTo('App\Models\Role');
    }
    public $incrementing = false;
}
