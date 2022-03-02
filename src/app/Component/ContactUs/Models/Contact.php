<?php 

namespace Magic\MagicComponent\App\Component\ContactUs\Models;

use Illuminate\Database\Eloquent\Model;
use Magic\MagicComponent\App\Component\ContactUs\Models\Contact\Type;

class Contact extends Model {

    protected $table = "contacts";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'type_id',
        'status',
    ];

    public function type() {
        return $this->hasOne(Type::class,'id','type_id');
    }

    public function showStatus() {
        if($this->status == 0) {
            return '<span class="make_pad badge bg-danger">'.__("Unseen").'</span>';
        } else {
            return '<span class="make_pad badge bg-success">'.__("Seen").'</span>';
        }
    }

}

