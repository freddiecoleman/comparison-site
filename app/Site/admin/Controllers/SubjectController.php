<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Subject;
use Site\Admin\Models\Type;

class SubjectController extends \BaseController {

	public function index()
	{
        $subjects = Subject::all();
        return \View::make('admin::subject.index')->with(array('subjects' => $subjects));
	}

	public function edit($id)
	{
        $subject = Subject::find($id);
        $types = Type::lists('name', 'id');
        return \View::make('admin::subject.edit')->with(array(
                'subject' => $subject,
                'types' => $types
            ));
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
