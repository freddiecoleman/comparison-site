<?php
namespace Site\Api\Models;

use Jenssegers\Mongodb\Model as Eloquent;

class Data extends Eloquent {

    protected $connection = 'mongodb';

}