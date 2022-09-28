<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class StarredProject extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    protected $table ='starred_projects';
     
    const STATUS_HOMEPAGE = 'homePage';
    const STATUS_ACTIVE = 'active';
    const STATUS_DISACTIVE = 'disactive';
    protected $guarded =[];
    
    public $translatable = ['name','details'];
    
    public function images(){
        return $this->morphMany(Image::class,'imageable');
    }

}
 