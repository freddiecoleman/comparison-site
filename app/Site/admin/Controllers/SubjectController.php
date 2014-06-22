<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Subject;

class SubjectController extends \BaseController {

	public function index()
	{
        $subjects = Subject::all();
        return \View::make('admin::subject.index')->with(array('subjects' => $subjects));
	}

	public function edit($id)
	{
        return \View::make('admin::subject.edit')->with(array('id' => $id));
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
