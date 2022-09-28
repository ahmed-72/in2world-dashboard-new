<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Feedback extends Model
{
    use HasFactory ,SoftDeletes ,HasTranslations;

    protected $guarded =[];
    
    public $translatable = ['name','jobTitle','feedback'];

    public function images(){
        return $this->morphMany(image::class, 'imageable');
    }

    public function product(){ 
        return  $this->belongsTo('App\Models\Product');
    }
}
