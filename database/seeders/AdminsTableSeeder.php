<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    $faker = Faker::create();
    for($i =0 ;$i < 6;$i++){
    admin::create([
    'name' => $faker->firstName(),
    'email' => $faker->email,
    'password' => bcrypt('12345678'),
    ]);
 }
}
}
