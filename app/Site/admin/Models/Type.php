<?php

namespace Site\Admin\Models;

class Type extends \Eloquent {
    protected $table = 'types';

    public function subjects()
    {
        return $this->hasMany('Subject', 'type');
    }

}

