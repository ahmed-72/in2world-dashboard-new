<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLike extends Model
{
    use HasFactory;
    protected $primaryKey = ['content_blog_id', 'user_id'];
    protected $guarded =[];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }    
    public function contentBlog(){ 
        return $this->belongsTo('App\Models\contentBlog');
    }
    public $incrementing = false;

}
