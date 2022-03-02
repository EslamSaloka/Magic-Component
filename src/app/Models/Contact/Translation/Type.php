<?php

namespace Magic\MagicComponent\App\Models\Contact\Translation;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    protected $table = "contact_type_translations";

    protected $fillable = ['name'];
    
    protected $guarded = ['type_id'];
    
    public $timestamps = false;

}
