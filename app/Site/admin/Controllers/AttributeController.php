<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Attribute;
use Session;
use Input;
use Redirect;

class AttributeController extends \BaseController {

    public function index()
    {
        $attributes = Attribute::all();
        return \View::make('admin::attribute.index')->with(array('attributes' => $attributes));
    }

    public function edit($id)
    {
        $attribute = Attribute::find($id);
        return \View::make('admin::attribute.edit')->with(array('attribute' => $attribute));
    }

    public function update($id)
    {
        $attribute = Attribute::find($id);

        $attribute->name = Input::get('name');
        $attribute->save();

        Session::flash('message', 'Attribute updated.');

        return Redirect::back();
    }

    public function create()
    {
        $attribute = new Attribute;
        $attribute->name = Input::get('name');

        $attribute->save();

        Session::flash('message', 'Attribute created.');

        return Redirect::back();
    }
} 