<?php 

namespace Magic\MagicComponent\App\Models\Contact;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Type extends Model implements TranslatableContract
{
    use Translatable;

    protected $with =[
        'translations'
    ];
    
    protected $translationForeignKey = "type_id";
    public $translatedAttributes = ['name'];
    public $translationModel = 'Magic\MagicComponent\App\Models\Contact\Translation\Type';
    protected $table = "contact_types";
    protected $fillable = ['status'];
    
    public function showStatus() {
        if($this->status == 0) {
            return '<span class="make_pad badge bg-danger">'.__("Unseen").'</span>';
        } else {
            return '<span class="make_pad badge bg-success">'.__("Seen").'</span>';
        }
    }
}

