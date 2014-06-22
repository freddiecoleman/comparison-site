<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Type;
use Site\Admin\Models\Attribute;

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


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
