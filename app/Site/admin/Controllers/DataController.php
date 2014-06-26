<?php
namespace Site\Admin\Controllers;

use Site\Api\Models\Data;
use Input;

class DataController extends \BaseController {

    public function index($id)
    {
        $data = Data::where('subjectID', '=', $id)->get()->toArray();
        return \View::make('admin::data.index')->with(array('data' => $data));
    }

}
