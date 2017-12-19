<?php

/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 19-12-2017
 * Time: 15:30
 */
use App\Zoo;
use Illuminate\Database\Seeder;

class ZooTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //Zoo::truncate();

        // And now, let's create a few zoos in our database:
        Zoo::create([
            'name' => 'Beekse Bergen'
        ]);

        Zoo::create([
            'name' => 'Zoo Berlin'
        ]);

        Zoo::create([
            'name' => 'Chester Zoo'
        ]);

        Zoo::create([
            'name' => 'Pairi Daiza'
        ]);
    }
}