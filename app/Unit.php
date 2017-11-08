<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $connection = 'mysql';

    protected $table = 'units';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_number', 'tenant'
    ];

    public function user()
    {
        return $this->belongsTo('app\User');
    }
}
