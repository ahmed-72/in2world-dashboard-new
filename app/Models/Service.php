<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasTranslations;

    const STATUS_ACTIVE = 'active';
    const STATUS_DISACTIVE = 'disactive';
    protected $guarded =[];
    
    public $translatable = ['name','details']; 
    
    public function images(){
        return $this->morphMany(image::class,'imageable');
    }

}
