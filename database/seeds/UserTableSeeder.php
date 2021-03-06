<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => bcrypt('secret'),
          ]);
        }
    }

}
