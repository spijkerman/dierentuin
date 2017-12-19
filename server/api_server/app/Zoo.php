<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 18-12-2017
 * Time: 15:59
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    protected $fillable = ['name'];

    public function animals()
    {
        return $this->hasMany('App\Animal', 'id', 'animal_id');
    }
}