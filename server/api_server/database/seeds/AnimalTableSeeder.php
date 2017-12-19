<?php

/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 15:22
 */
use App\Animal;
use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //Animal::truncate();

        // And now, let's create a few animals in our database:
        Animal::create([
            'name' => 'Aardmuis',
            'animal_type_id' => 4,
            'zoo_id' => 1
        ]);

        Animal::create([
            'name' => 'Bruine Uil',
            'animal_type_id' => 3,
            'zoo_id' => 1
        ]);

        Animal::create([
            'name' => 'Eilandnachthagedis',
            'animal_type_id' => 2,
            'zoo_id' => 1
        ]);

        Animal::create([
            'name' => 'Paradijssis',
            'animal_type_id' => 1,
            'zoo_id' => 1
        ]);

        Animal::create([
            'name' => 'Gorilla',
            'animal_type_id' => 4,
            'zoo_id' => 2
        ]);

        Animal::create([
            'name' => 'Blauwe Gaai',
            'animal_type_id' => 3,
            'zoo_id' => 2
        ]);

        Animal::create([
            'name' => 'Aspisadder',
            'animal_type_id' => 2,
            'zoo_id' => 2
        ]);

        Animal::create([
            'name' => 'Zwarte Neon',
            'animal_type_id' => 1,
            'zoo_id' => 2
        ]);

        Animal::create([
            'name' => 'Woelrat',
            'animal_type_id' => 4,
            'zoo_id' => 3
        ]);

        Animal::create([
            'name' => 'Fuut',
            'animal_type_id' => 3,
            'zoo_id' => 3
        ]);

        Animal::create([
            'name' => 'Fijileguaan',
            'animal_type_id' => 2,
            'zoo_id' => 3
        ]);

        Animal::create([
            'name' => 'Baardmeerval',
            'animal_type_id' => 1,
            'zoo_id' => 3
        ]);

        Animal::create([
            'name' => 'Grondspecht',
            'animal_type_id' => 3,
            'zoo_id' => 4
        ]);

        Animal::create([
            'name' => 'Matama',
            'animal_type_id' => 2,
            'zoo_id' => 4
        ]);

        Animal::create([
            'name' => 'Maanvis',
            'animal_type_id' => 1,
            'zoo_id' => 4
        ]);
    }
}