<?php
namespace Site\Admin\Controllers;

use Site\Api\Models\Data;
use Site\Admin\Models\Subject;
use Site\Admin\Models\Attribute;
use Input;

class DataController extends \BaseController {

    public function index($id)
    {
        $subject = Subject::find($id);

        $attributes = $subject->type->attributes;

        $activeColumns = array(); // attributes assigned to the subject through type

        foreach ($attributes as $attribute)
        {
            array_push($activeColumns, $attribute->alias);
        }

        $data = Data::where('subjectID', '=', $id)->get();

        $allColumns = array(); // all columns that have been entered into the data (it's schemaless)

        foreach ($data as $row)
        {
            foreach ($row->toArray() as $columnName=>$value)
            {
                if (!in_array($columnName, $allColumns) && $columnName != '_id' && $columnName != 'updated_at' && $columnName != 'created_at' && $columnName != 'subjectID') // only add each column once and blacklist mongoDB columns that arent needed
                {
                    array_push($allColumns, $columnName);
                }
            }
        }

        $extraColumns = array_diff($allColumns, $activeColumns); // the columns in the dataset that are not attributes assigned to the subject

        return \View::make('admin::data.index')->with(array('activeColumns' => $activeColumns, 'extraColumns' => $extraColumns, 'data' => $data));
    }

}
