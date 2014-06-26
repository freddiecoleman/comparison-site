<?php
namespace Site\Admin\Controllers;

use Site\Api\Models\Data;
use Site\Admin\Models\Subject;
use Input;

class DataController extends \BaseController {

    public function index($id)
    {
        $subject = Subject::where('id', '=', $id);
        $attributes = $subject->attributes();

        $data = Data::where('subjectID', '=', $id)->get()->toArray();
        $columns = array();
        foreach ($data as $row)
        {
            foreach ($row as $columnName=>$data)
            {
                if (!in_array($columnName, $columns)) // only add each column once
                {
                    array_push($columns, $columnName);
                }
            }

        }

        return \View::make('admin::data.index')->with(array('attributes' => $attributes));
    }

}
