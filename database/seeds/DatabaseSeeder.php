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
        //$this->call(UserSeeder::class);
       // factory(App\Tag::class, 100)->create();
        factory(App\User::class, 50)->create();

    }
}
