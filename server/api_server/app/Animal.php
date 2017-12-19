<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 18-12-2017
 * Time: 15:59
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name'];

    public function animalType() {
        return $this->belongsTo('App\AnimalType', 'animal_type_id', 'id');
    }

    public function zoo() {
        return $this->belongsTo('App\Zoo', 'zoo_id', 'id');
    }
}