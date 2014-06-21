<?php

namespace Site\Admin\Models;

class Type extends \Eloquent {
    protected $table = 'types';

    public function attributes()
    {
        return $this->belongsToMany('Site\Admin\Models\Attribute', 'types_attributes', 'type_id', 'attribute_id');
    }


}

