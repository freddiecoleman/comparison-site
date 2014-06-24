<?php


namespace Site\Admin\Models;


class Attribute extends \Eloquent {
    protected $table = 'attributes';

    public function types()
    {
        return $this->belongsToMany('Site\Admin\Models\Type', 'types_attributes', 'attribute_id', 'type_id');
    }

}