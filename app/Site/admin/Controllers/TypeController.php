<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Type;
use Site\Admin\Models\Attribute;
use Input;
use Redirect;

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

        return Redirect::route('types'); // change later to direct back with flash message
    }

    public function addAttribute($id)
    {
        $type = Type::find($id);

        $type->attributes()->attach(Input::get('attribute'));

        return Redirect::route('types'); // change later to direct back with flash message
    }

    public function removeAttribute($id, $attribute)
    {

        $type = Type::find($id);

        $type->attributes()->detach($attribute);

        return Redirect::route('types'); // change later to direct back with flash message
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
