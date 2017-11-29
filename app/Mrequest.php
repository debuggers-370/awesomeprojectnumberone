<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrequest extends Model
{
    protected $table = 'requests';
    protected $connection = 'mysql';
    //
    public function user()
    {
        return $this->belongsTo('app\Unit');
    }
}
