<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 18-12-2017
 * Time: 16:04
 */

namespace App\Http\Controllers;

use App\Animal;
use App\AnimalType;
use App\Zoo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // functions for api routes
    public function index()
    {
        return Animal::all();
    }

    public function show(Animal $animal)
    {
        return $animal;
    }

    public function store(Request $request)
    {
        // create new animal and save it
        $animal = new Animal($request->only('name'));
        $animalType = AnimalType::find($request->get('animal_type_id'));
        $zoo = Zoo::find($request->get('zoo_id'));

        // add foreign keys for animal_type and zoo
        $animal->animalType()->associate($animalType);
        $animal->zoo()->associate($zoo);
        $animal->save();

        return response()->json($animal, 201);
    }

    public function update(Request $request, Animal $animal)
    {
        $animalType = AnimalType::find($request->get('animal_type_id'));
        $zoo = Zoo::find($request->get('zoo_id'));

        if($request->get('animal_type_id') != null)
        {
            $animal->animalType()->associate($animalType);
        }

        if($request->get('zoo_id') != null)
        {
            $animal->zoo()->associate($zoo);
        }

        $animal->update($request->all());

        return response()->json($animal, 200);
    }

    public function delete(Animal $animal)
    {
        $animal->delete();

        return response()->json(null, 204);
    }

    // Functions for web routes
    public function allAnimals()
    {
        $animals = Animal::all();

        return view('animals.overview', [
            'objects' => $animals
        ]);
    }

    public function recentlyAddedAnimals()
    {
        $animals = Animal::all();

        $recentlyAddedAnimals = [];
        foreach($animals as $animal){
            if($animal->created_at > Carbon::create(2017, 12, 20, 0, 0, 0, 'Europe/Amsterdam')){
                array_push($recentlyAddedAnimals, $animal);
            }
        }

        return view('animals.recently_added', [
            'objects' => $recentlyAddedAnimals
        ]);
    }
}