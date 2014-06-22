<?php

namespace Site\Admin\Models;

class Subject extends \Eloquent {

    //protected $fillable = array('name');
    protected $table = 'subjects';

    public function type()
    {
        return $this->belongsTo('Site\Admin\Models\Type');
    }
}

