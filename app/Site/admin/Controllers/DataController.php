<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Subject;
use Input;

class DataController extends \BaseController {

    public function index($id)
    {
        $subject = Subject::find($id);
        return $subject;
    }

}
