<?php

if(!function_exists('action_table_delete')) {
    function action_table_delete($route,$index = 0) {
        return '<form action="' . $route . '" method="post" id="form_'.$index.'">
        <input name="_method" type="hidden" value="delete">
        <input type="hidden" name="_token" id="csrf-token" value="' . Session::token() . '" />
        <a class="btn btn-outline-secondary btn-sm row_deleted" data-bs-toggle="modal" data-id="'.$index.'" data-bs-target="#staticBackdrop">
            <i class="fas fa-trash"></i>
        </a>
        </form>';
    }
}

if (!function_exists('getSettings')) {

    function getSettings($var = null, $default = null,$trans = false)
    {
        $asgaTechSettings = \App\Models\Setting::get()->toArray();
        $data = array_column($asgaTechSettings, 'value', 'key');
        if(is_null($var)) {
            return $data;
        }
        return isset($data[$var]) ? $data[$var] : $default;
    }
}

if (!function_exists('display_image_by_model')) {
    function display_image_by_model($model,$key) {
        if(is_null($model)) {
            return "https://www.gravatar.com/avatar/".md5('123456');
        }
        if(is_null($model->$key)) {
            $name = explode(" ",$model->name);
            if(count($name) > 1) {
                $getName = $name[0].' '.$name[1];  
            } else {
                $getName = $model->name;
            }
            return "https://eu.ui-avatars.com/api/?uppercase=true&name=".$getName."&background=random";
        }
        return url($model->$key);
    }
}