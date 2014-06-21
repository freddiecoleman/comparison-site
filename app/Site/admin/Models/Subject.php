<?php

namespace Site\Admin\Models;

class Subject extends \Eloquent {
    protected $table = 'subjects';

    public function type()
    {
        return $this->belongsTo('Site\Admin\Models\Type');
    }
}

