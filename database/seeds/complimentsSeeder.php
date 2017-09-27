<?php

use Illuminate\Database\Seeder;

class complimentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Compliment::class, 10)->create();
    }
}
