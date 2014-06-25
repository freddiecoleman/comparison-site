<?php
namespace Site\Api\Controllers;

use Site\Api\Models\Data;

class ApiController extends \BaseController {

    public function index($id)
    {
        $data = Data::all();

        return \Response::json($data);
    }

}
