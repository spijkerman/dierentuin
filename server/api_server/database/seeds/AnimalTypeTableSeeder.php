<?php

/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 15:19
 */

use App\AnimalType;
use Illuminate\Database\Seeder;

class AnimalTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //AnimalType::truncate();

        // And now, let's create a few animalTypes in our database:
        AnimalType::create([
            'name' => 'vissen'
        ]);

        AnimalType::create([
            'name' => 'reptielen'
        ]);

        AnimalType::create([
            'name' => 'zoogdieren'
        ]);

        AnimalType::create([
            'name' => 'vogels'
        ]);
    }
}