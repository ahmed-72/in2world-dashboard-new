<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded =[];

    protected $casts = [
        'abilities' => 'array',
    ]; 
    public function users(){
        $this->belongsToMany(User::class,'role_users');
    }
}
