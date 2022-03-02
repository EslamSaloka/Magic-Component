<?php 

namespace Magic\MagicComponent\App\Component\ContactUs\Controller\Api;

// Controller
use App\Http\Controllers\Controller;
// API
use App\Support\API;
use Magic\MagicComponent\App\Component\ContactUs\Models\Contact\Type;

class ContactController extends Controller
{ 

    public function index() 
    {
        // return (new API)->isOk(__('Contact Us Types Lists'))->setData($data)->build();
    }

    public function store() 
    {

    }
}