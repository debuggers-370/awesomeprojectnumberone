<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 2:22 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $connection = 'mysql';

    protected $table = 'buildings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('app\Property');
    }
}