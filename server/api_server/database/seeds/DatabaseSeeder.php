<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnimalTypeTableSeeder::class);
        $this->call(ZooTableSeeder::class);
        $this->call(AnimalTableSeeder::class);
    }
}
