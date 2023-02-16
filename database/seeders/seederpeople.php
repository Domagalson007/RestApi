<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Modelpeople;
use Faker\Factory;

class seederpeople extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('modelpeoples')->delete();

        $faker = Factory::create();

        for($i = 0; $i < 50; $i++)
        {
            Modelpeople::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'adress' => $faker->streetAddress,
                'city/country' => $faker->country
            ]);
        }
        
    }
}
