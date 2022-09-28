<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;


class Product extends Model
{
    use HasFactory ,SoftDeletes ,HasTranslations;

    protected $guarded =[];

   // protected $casts = ['name'=>'array' ,'title'=>'array','subTitle'=>'array']; 

    public $translatable = ['name' ,'title','subTitle' ,'desciption', 'contactInformation'];

    public function images(){
        return $this->morphMany(image::class, 'imageable');
    }

    public function buttons(){
        return  $this->hasMany('App\Models\Button');
    }
    public function advantages(){ 
        return  $this->hasMany('App\Models\Advantage');
    }
    public function feedbacks(){ 
        return  $this->hasMany('App\Models\Feedback');
    }
}
