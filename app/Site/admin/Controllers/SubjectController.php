<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Subject;

class SubjectController extends \BaseController {

	public function index()
	{
        $subjects = Subject::all();
        return \View::make('admin::subject')->with(array('subjects' => $subjects));
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}


}
