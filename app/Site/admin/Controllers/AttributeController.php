<?php
namespace Site\Admin\Controllers;

use Site\Admin\Models\Attribute;

class AttributeController extends \BaseController {

    public function index()
    {
        $attributes = Attribute::all();
        return \View::make('admin::attribute.index')->with(array('attributes' => $attributes));
    }
} 