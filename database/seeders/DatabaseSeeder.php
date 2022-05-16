<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
      $faker = Faker::create();
      for($i=1;$i<20;$i++)
      {
          DB::table('contacts')->insert([
            'name'=>$faker->name(),
            'phone_number'=>$faker->numerify('###-###-####'),
            'email_address'=> $faker->email(),
            'desired_budget' => $faker->randomNumber(),
            'message'=>$faker->realText(50,3)
          ]);
      }
    }
}
