<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;
use Laravelista\Comments\Commentable;


class ContentBlog extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;
    use Commentable;

    const STATUS_HOMEPAGE = 'homePage';
    const STATUS_ACTIVE = 'active';
    const STATUS_DISACTIVE = 'disactive';
    protected $guarded =[];

    public $translatable = ['name','details','content','keywords'];

    
    public function images()
    {
        return $this->morphMany(image::class, 'imageable');
    }
    public function likes(){
        return  $this->hasMany('App\Models\UserLike');
    }
}
