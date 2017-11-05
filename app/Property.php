<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $connection = 'mysql';

    protected $table = 'properties';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'owner', 'address'
    ];

    public function user()
    {
        return $this->belongsTo('app\User');
    }
}