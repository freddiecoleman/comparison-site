<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Type;
use Site\Admin\Models\Attribute;
use Input;
use Redirect;
use Session;

class TypeController extends \BaseController {

	public function index()
	{
        $types = Type::all();
        return \View::make('admin::type.index')->with(array('types' => $types));
	}

	public function edit($id)
	{
        $type = Type::find($id);
        $attributes = Attribute::lists('name', 'id');
        return \View::make('admin::type.edit')->with(array(
            'type' => $type,
            'attributes' => $attributes
        ));
	}


    public function update($id)
    {
        $type = Type::find($id);

        $type->name = Input::get('name');
        $type->save();

        Session::flash('message', 'Type updated.');

        return Redirect::back();
    }

    public function addAttribute($id)
    {
        $type = Type::find($id);

        $type->attributes()->attach(Input::get('attribute'));

        Session::flash('message', 'Attribute added.');

        return Redirect::back();
    }

    public function removeAttribute($id, $attribute)
    {

        $type = Type::find($id);

        $type->attributes()->detach($attribute);

        Session::flash('message', 'Attribute removed.');

        return Redirect::back();
    }

    public function create()
    {

        $type = new Type;
        $type->name = Input::get('name');

        $type->save();

        Session::flash('message', 'Type created.');

        return Redirect::back();

    }

	public function destroy($id)
	{
        $type = Type::find($id);
        $type->attributes()->detach();
        //$type->delete();

        Session::flash('message', 'Type deleted.');

        return Redirect::back();
	}


}
