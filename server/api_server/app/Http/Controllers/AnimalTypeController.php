<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 16:04
 */

namespace App\Http\Controllers;


use App\AnimalType;

class AnimalTypeController extends Controller
{
    public function index()
    {
        return AnimalType::all();
    }

    public function show(AnimalType $animalType)
    {
        return $animalType;
    }
}