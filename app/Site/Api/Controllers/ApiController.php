<?php
namespace Site\Api\Controllers;

use Site\Api\Models\Data;
use Input;

class ApiController extends \BaseController {

    public function index($id)
    {
        $data = Data::all();

        return \Response::json($data);
    }

    public function store($id)
    {
        $data = Input::all();

        $submit = new Data;

        foreach ($data as $key=>$value)
        {
            $submit->$key = $value;
        }

        if($submit->save())
        {
            return "success";
        } else {
            return "fail";
        }


    }

}
