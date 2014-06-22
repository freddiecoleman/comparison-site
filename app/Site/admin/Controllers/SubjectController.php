<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Subject;
use Site\Admin\Models\Type;
use Input;
use Redirect;
use Session;

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
		$subject = Subject::find($id);

        $subject->name = Input::get('name');
        $subject->type_id = Input::get('type');

        $subject->save();

        Session::flash('message', 'Subject updated.');

        return Redirect::back();
	}

	public function destroy($id)
	{
		//
	}


}
