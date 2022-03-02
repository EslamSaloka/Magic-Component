<?php 

namespace Magic\MagicComponent\App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model {

    use Translatable;

    protected $with =[
        'translations'
    ];

    protected $translationForeignKey = "setting_id";

    public $translatedAttributes = ['value'];

    protected $table = "settings";

    protected $fillable = ['key', 'group_by'];

    public $translationModel = 'Magic\MagicComponent\App\Models\Translation\SettingTranslation';

}

